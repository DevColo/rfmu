/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (Drupal, debounce, CKEDITOR, $, displace, AjaxCommands) {
  Drupal.editors.ckeditor = {
    attach: function attach(element, format) {
      this._loadExternalPlugins(format);

      format.editorSettings.drupal = {
        format: format.format
      };
      var label = $("label[for=".concat(element.getAttribute('id'), "]")).html();
      format.editorSettings.title = Drupal.t('Rich Text Editor, !label field', {
        '!label': label
      });
      return !!CKEDITOR.replace(element, format.editorSettings);
    },
    detach: function detach(element, format, trigger) {
      var editor = CKEDITOR.dom.element.get(element).getEditor();

      if (editor) {
        if (trigger === 'serialize') {
          editor.updateElement();
        } else {
          editor.destroy();
          element.removeAttribute('contentEditable');
        }
      }

      return !!editor;
    },
    onChange: function onChange(element, callback) {
      var editor = CKEDITOR.dom.element.get(element).getEditor();

      if (editor) {
        editor.on('change', debounce(function () {
          callback(editor.getData());
        }, 400));
        editor.on('mode', function () {
          var editable = editor.editable();

          if (!editable.isInline()) {
            editor.on('autoGrow', function (evt) {
              var doc = evt.editor.document;
              var scrollable = CKEDITOR.env.quirks ? doc.getBody() : doc.getDocumentElement();

              if (scrollable.$.scrollHeight < scrollable.$.clientHeight) {
                scrollable.setStyle('overflow-y', 'hidden');
              } else {
                scrollable.removeStyle('overflow-y');
              }
            }, null, null, 10000);
          }
        });
      }

      return !!editor;
    },
    attachInlineEditor: function attachInlineEditor(element, format, mainToolbarId, floatedToolbarId) {
      this._loadExternalPlugins(format);

      format.editorSettings.drupal = {
        format: format.format
      };
      var settings = $.extend(true, {}, format.editorSettings);

      if (mainToolbarId) {
        var settingsOverride = {
          extraPlugins: 'sharedspace',
          removePlugins: 'floatingspace,elementspath',
          sharedSpaces: {
            top: mainToolbarId
          }
        };
        var sourceButtonFound = false;

        for (var i = 0; !sourceButtonFound && i < settings.toolbar.length; i++) {
          if (settings.toolbar[i] !== '/') {
            for (var j = 0; !sourceButtonFound && j < settings.toolbar[i].items.length; j++) {
              if (settings.toolbar[i].items[j] === 'Source') {
                sourceButtonFound = true;
                settings.toolbar[i].items[j] = 'Sourcedialog';
                settingsOverride.extraPlugins += ',sourcedialog';
                settingsOverride.removePlugins += ',sourcearea';
              }
            }
          }
        }

        settings.extraPlugins += ",".concat(settingsOverride.extraPlugins);
        settings.removePlugins += ",".concat(settingsOverride.removePlugins);
        settings.sharedSpaces = settingsOverride.sharedSpaces;
      }

      element.setAttribute('contentEditable', 'true');
      return !!CKEDITOR.inline(element, settings);
    },
    _loadExternalPlugins: function _loadExternalPlugins(format) {
      var externalPlugins = format.editorSettings.drupalExternalPlugins;

      if (externalPlugins) {
        Object.keys(externalPlugins || {}).forEach(function (pluginName) {
          CKEDITOR.plugins.addExternal(pluginName, externalPlugins[pluginName], '');
        });
        delete format.editorSettings.drupalExternalPlugins;
      }
    }
  };
  Drupal.ckeditor = {
    saveCallback: null,
    openDialog: function openDialog(editor, url, existingValues, saveCallback, dialogSettings) {
      var $target = $(editor.container.$);

      if (editor.elementMode === CKEDITOR.ELEMENT_MODE_REPLACE) {
        $target = $target.find('.cke_contents');
      }

      $target.css('position', 'relative').find('.ckeditor-dialog-loading').remove();
      var classes = dialogSettings.dialogClass ? dialogSettings.dialogClass.split(' ') : [];
      classes.push('ui-dialog--narrow');
      dialogSettings.dialogClass = classes.join(' ');
      dialogSettings.autoResize = window.matchMedia('(min-width: 600px)').matches;
      dialogSettings.width = 'auto';
      var $content = $("<div class=\"ckeditor-dialog-loading\"><span style=\"top: -40px;\" class=\"ckeditor-dialog-loading-link\">".concat(Drupal.t('Loading...'), "</span></div>"));
      $content.appendTo($target);
      var ckeditorAjaxDialog = Drupal.ajax({
        dialog: dialogSettings,
        dialogType: 'modal',
        selector: '.ckeditor-dialog-loading-link',
        url: url,
        progress: {
          type: 'throbber'
        },
        submit: {
          editor_object: existingValues
        }
      });
      ckeditorAjaxDialog.execute();
      window.setTimeout(function () {
        $content.find('span').animate({
          top: '0px'
        });
      }, 1000);
      Drupal.ckeditor.saveCallback = saveCallback;
    }
  };
  $(window).on('dialogcreate', function (e, dialog, $element, settings) {
    $('.ui-dialog--narrow').css('zIndex', CKEDITOR.config.baseFloatZIndex + 1);
  });
  $(window).on('dialog:beforecreate', function (e, dialog, $element, settings) {
    $('.ckeditor-dialog-loading').animate({
      top: '-40px'
    }, function () {
      $(this).remove();
    });
  });
  $(window).on('editor:dialogsave', function (e, values) {
    if (Drupal.ckeditor.saveCallback) {
      Drupal.ckeditor.saveCallback(values);
    }
  });
  $(window).on('dialog:afterclose', function (e, dialog, $element) {
    if (Drupal.ckeditor.saveCallback) {
      Drupal.ckeditor.saveCallback = null;
    }
  });
  $(document).on('drupalViewportOffsetChange', function () {
    CKEDITOR.config.autoGrow_maxHeight = 0.7 * (window.innerHeight - displace.offsets.top - displace.offsets.bottom);
  });

  function redirectTextareaFragmentToCKEditorInstance() {
    var hash = window.location.hash.substr(1);
    var element = document.getElementById(hash);

    if (element) {
      var editor = CKEDITOR.dom.element.get(element).getEditor();

      if (editor) {
        var id = editor.container.getAttribute('id');
        window.location.replace("#".concat(id));
      }
    }
  }

  $(window).on('hashchange.ckeditor', redirectTextareaFragmentToCKEditorInstance);
  CKEDITOR.config.autoGrow_onStartup = true;
  CKEDITOR.config.autoGrow_maxHeight = 0.7 * window.innerHeight;
  CKEDITOR.timestamp = drupalSettings.ckeditor.timestamp;

  if (AjaxCommands) {
    AjaxCommands.prototype.ckeditor_add_stylesheet = function (ajax, response, status) {
      var editor = CKEDITOR.instances[response.editor_id];

      if (editor) {
        response.stylesheets.forEach(function (url) {
          editor.document.appendStyleSheet(url);
        });
      }
    };
  }
})(Drupal, Drupal.debounce, CKEDITOR, jQuery, Drupal.displace, Drupal.AjaxCommands);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, CKEDITOR) {
  var convertToOffCanvasCss = function convertToOffCanvasCss(originalCss) {
    var selectorPrefix = '#drupal-off-canvas ';
    var skinPath = "".concat(CKEDITOR.basePath).concat(CKEDITOR.skinName, "/");
    var css = originalCss.substring(originalCss.indexOf('*/') + 2).trim().replace(/}/g, "}".concat(selectorPrefix)).replace(/,/g, ",".concat(selectorPrefix)).replace(/url\(/g, skinPath);
    return "".concat(selectorPrefix).concat(css);
  };

  var insertCss = function insertCss(cssToInsert) {
    var offCanvasCss = document.createElement('style');
    offCanvasCss.innerHTML = cssToInsert;
    offCanvasCss.setAttribute('id', 'ckeditor-off-canvas-reset');
    document.body.appendChild(offCanvasCss);
  };

  var addCkeditorOffCanvasCss = function addCkeditorOffCanvasCss() {
    if (document.getElementById('ckeditor-off-canvas-reset')) {
      return;
    }

    CKEDITOR.skinName = CKEDITOR.skin.name;
    var editorCssPath = CKEDITOR.skin.getPath('editor');
    var dialogCssPath = CKEDITOR.skin.getPath('dialog');
    var storedOffCanvasCss = window.localStorage.getItem("Drupal.off-canvas.css.".concat(editorCssPath).concat(dialogCssPath));

    if (storedOffCanvasCss) {
      insertCss(storedOffCanvasCss);
      return;
    }

    $.when($.get(editorCssPath), $.get(dialogCssPath)).done(function (editorCss, dialogCss) {
      var offCanvasEditorCss = convertToOffCanvasCss(editorCss[0]);
      var offCanvasDialogCss = convertToOffCanvasCss(dialogCss[0]);
      var cssToInsert = "#drupal-off-canvas .cke_inner * {background: transparent;}\n          ".concat(offCanvasEditorCss, "\n          ").concat(offCanvasDialogCss);
      insertCss(cssToInsert);

      if (CKEDITOR.timestamp && editorCssPath.indexOf(CKEDITOR.timestamp) !== -1 && dialogCssPath.indexOf(CKEDITOR.timestamp) !== -1) {
        Object.keys(window.localStorage).forEach(function (key) {
          if (key.indexOf('Drupal.off-canvas.css.') === 0) {
            window.localStorage.removeItem(key);
          }
        });
        window.localStorage.setItem("Drupal.off-canvas.css.".concat(editorCssPath).concat(dialogCssPath), cssToInsert);
      }
    });
  };

  addCkeditorOffCanvasCss();
})(jQuery, CKEDITOR);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  Drupal.behaviors.textSummary = {
    attach: function attach(context, settings) {
      once('text-summary', '.js-text-summary', context).forEach(function (summary) {
        var $widget = $(summary).closest('.js-text-format-wrapper');
        var $summary = $widget.find('.js-text-summary-wrapper');
        var $summaryLabel = $summary.find('label').eq(0);
        var $full = $widget.children('.js-form-type-textarea');
        var $fullLabel = $full.find('label').eq(0);

        if ($fullLabel.length === 0) {
          $fullLabel = $('<label></label>').prependTo($full);
        }

        if ($fullLabel.hasClass('visually-hidden')) {
          $fullLabel.html(function (index, oldHtml) {
            return "<span class=\"visually-hidden\">".concat(oldHtml, "</span>");
          });
          $fullLabel.removeClass('visually-hidden');
        }

        var $link = $("<span class=\"field-edit-link\"> (<button type=\"button\" class=\"link link-edit-summary\">".concat(Drupal.t('Hide summary'), "</button>)</span>"));
        var $button = $link.find('button');
        var toggleClick = true;
        $link.on('click', function (e) {
          if (toggleClick) {
            $summary.hide();
            $button.html(Drupal.t('Edit summary'));
            $link.appendTo($fullLabel);
          } else {
            $summary.show();
            $button.html(Drupal.t('Hide summary'));
            $link.appendTo($summaryLabel);
          }

          e.preventDefault();
          toggleClick = !toggleClick;
        }).appendTo($summaryLabel);

        if (summary.value === '') {
          $link.trigger('click');
        }
      });
    }
  };
})(jQuery, Drupal);;
jQuery(document).ready(function($) {
  $(".to-top").click(function() {
    $("body,html").animate({scrollTop:0},800);
  });
});
;
