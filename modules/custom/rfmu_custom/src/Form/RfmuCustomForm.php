<?php
namespace Drupal\rfmu_custom\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Url;
use Drupal\Core\Routing;
use Drupal\Core\Form\ConfirmFormBase;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Ajax\InvokeCommand;
use Drupal\Core\Ajax\AlertCommand;
use Drupal\Core\Ajax\ReplaceCommand;
use Drupal\Core\Ajax\OpenModalDialogCommand;
use Drupal\Core\Form\FormState;
use Drupal\Core\Link;

class RfmuCustomForm extends FormBase {
public function getFormId(){
    return 'all_models';
  }

   public function buildForm(array $form, FormStateInterface $form_state) {
     $conn = Database::getConnection();
     $record = array();
    // if (isset($_GET['edit'])) {
    //     $query = $conn->select('splp_officials', 'so')
    //         ->condition('id', $_GET['edit'])
    //         ->fields('so');
    //     $record = $query->execute()->fetchAssoc();
    // }
    $query = $conn->select('taxonomy_term_field_data','ttfd')->condition('ttfd.vid','model_gender')->fields('ttfd',['tid','name']);
    $sex = $query->execute()->fetchAll();
    $gender=[];
    foreach($sex as $sex){
      $gender[]= ['tid'=>$sex->tid,'name'=>$sex->name];
    }
    $query = $conn->select('taxonomy_term_field_data','ttfd')->condition('ttfd.vid','model_complexion')->fields('ttfd',['tid','name']);
    $comp = $query->execute()->fetchAll();
    $skin=[];
    foreach($comp as $comp){
      $skin[]= ['tid'=>$comp->tid,'name'=>$comp->name];
    }
  //  dd($gender[0]);die;



    $form = array(
      '#attributes' => array('enctype' => 'multipart/form-data'),
    );
    //  $form = array(
    //   '#attributes' => array('class' => '.contact-form'),
    // );

    $form['gender'] = array(
        '#type' => 'select',
        '#title' => t('By Gender'),
        '#required'=> TRUE,
        '#options' => [1=>'All', $gender[0]['tid']=>$gender[0]['name'],$gender[1]['tid']=>$gender[1]['name']],
        '#default_value' => (isset($record['image']) && $_GET['edit']) ? $record['image']:'',
    );
    $form['skin'] = array(
        '#type' => 'select',
        '#title' => t('By Complexion'),
        '#required'=> TRUE,
        '#options' => [1=>'All', $skin[0]['tid']=>$skin[0]['name'],$skin[1]['tid']=>$skin[1]['name'],$skin[2]['tid']=>$skin[2]['name'],$skin[3]['tid']=>$skin[3]['name'],$skin[4]['tid']=>$skin[4]['name'],$skin[5]['tid']=>$skin[5]['name']],
        //'#default_value' => (isset($record['image']) && $_GET['edit']) ? $record['image']:'',
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Apply'),
      '#button_type' => 'primary',
    );
   // $form['#theme'] = 'officials_form';
    
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#button_type' => 'primary',
    '#ajax' => ['callback' => '::saveDataAjaxCallback'] ,
    '#value' => $this->t('Apply'),
    ];

   // $form['actions']['clear'] = [
   //    '#type' => 'submit',
   //    '#ajax' => ['callback' => '::clearForm','wrapper' => 'form-div',] ,
   //    '#value' => 'Clear',
   //   ];
   $render_array['#attached']['library'][] = 'rfmu_custom/global_styles';
    return $form;
  }

    public function validateForm(array &$form, FormStateInterface $form_state) {
    }

       public function submitForm(array &$form, FormStateInterface $form_state) {
    }

     /**
    * Our custom Ajax responce.
    */
   public function saveDataAjaxCallback(array &$form, FormStateInterface $form_state) {
    
//    $conn = Database::getConnection();

//     $field = $form_state->getValues();
  
//     $re_url = Url::fromRoute('gallery.gallery_form');

//     $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
//     $uid= $user->get('uid')->value;

//     $file = file_save_upload($field['image']);
//     $file->status = FILE_STATUS_PERMANENT;
//     $fid = $field['image'][0];

//     $fields["admin_id"] = $uid;
//     $fields["image_fid"] = $fid;
   
//   // $fields["fname"] = $field['fname'];
//   // $fields["sname"] = $field['sname'];
//   // $fields["age"] = $field['age'];
//   // $fields["marks"] = $field['marks'];
//   $response = new AjaxResponse();
//   //========Field value validation
//   // if($fields["fname"] == ''){
//   //   $css = ['border' => '1px solid red'];
//   //   $text_css = ['color' => 'red'];
//   //       $message = ('First Name not valid.');
  
//   //   //$response = new \Drupal\Core\Ajax\AjaxResponse();
//   //   $response->addCommand(new \Drupal\Core\Ajax\CssCommand('#edit-fname', $css));
//   //   $response->addCommand(new \Drupal\Core\Ajax\CssCommand('#div-fname-message', $text_css));
//   //   $response->addCommand(new \Drupal\Core\Ajax\HtmlCommand('#div-fname-message', $message));
//   //   return $response;
//   // }else{
    
//   $conn->insert('splp_gallery')
//         ->fields($fields)->execute();
     
//   $dialogText['#attached']['library'][] = 'core/drupal.dialog.ajax';
// //$response->addCommand(new OpenModalDialogCommand("Success!", 'The table has been submitted.', ['width' => 800]));
// // \Drupal::messenger()->addMessage($this->t('Form Submitted Successfully'), 'status', TRUE);

//     // $message = [
//     //   '#theme' => 'status_messages',
//     //   '#message_list' => drupal_set_messages(),
//     // ];

//     //$messages = \Drupal::service('renderer')->render($message);

//     //$response = new AjaxResponse();
//     //$response->addCommand(new HtmlCommand('#result-message', $messages));
//   $response->addCommand(new MessageCommand('Your changes have been saved.'));
  
//   $render_array = \Drupal::formBuilder()->getForm('Drupal\gallery\Form\GalleryTableForm','All');
//   //$render_array['#attached']['library'][] = 'dn_students/global_styles';
//    $response->addCommand(new HtmlCommand('.result_message','' ));
//    $response->addCommand(new \Drupal\Core\Ajax\AppendCommand('.result_message', $render_array));
//    $response->addCommand(new HtmlCommand('.pagination','' ));
//    $response->addCommand(new \Drupal\Core\Ajax\AppendCommand('.pagination', getPage()));
//     $response->addCommand(new \Drupal\Core\Ajax\InvokeCommand('.pagination-link', 'removeClass', array('active')));
//      $response->addCommand(new \Drupal\Core\Ajax\InvokeCommand('.pagination-link:first', 'addClass', array('active')));
//    $response->addCommand(new InvokeCommand('.txt-class', 'val', ['']));
   
//   // $form_state->setRebuild(TRUE);
//    // $form_state->setRedirect('gallery.gallery_form');
//     return $response;
   
 // }
   
  }
}