<?php
use Drupal\user\Entity\User;
use Drupal\file\Entity\File;
use Drupal\Core\Link;
use Drupal\Core\Url;

function rmodels_preprocess(&$variables, $hook, $info) {
 // Bootstrap::preprocess($variables, $hook, $info);
  $variables['base_path'] = $GLOBALS['base_url'];
  $variables['base_url'] = $GLOBALS['base_url'];

  $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
  //$uid= $user->get('uid')->value;

  $account_type = \Drupal\taxonomy\Entity\Term::load($user->field_account_type->target_id);
  if(!empty($account_type)){
    $user_account_type = $account_type->name->value;
  }else{
    $user_account_type = '';
  }
  
  $country_id = $user->field_agency_address->country;
  $country = \Drupal::database()->select('countrylist_field_data','cl')->condition('cl.id',$country_id)->fields('cl')->execute()->fetchAll();
  if(!empty($country)){
    $country_name = $country[0]->name;
  }else{
    $country_name = '';
  }
    

  $state_id = $user->field_agency_address->state;
  $state = \Drupal::database()->select('statelist_field_data','sl')->condition('sl.id',$state_id)->fields('sl')->execute()->fetchAll();
  if(!empty($state)){
    $state_name = $state[0]->name;
  }else{
    $state_name = '';
  }
    
  if(!empty($user->field_agency_bio->value)){
    $bio = $user->field_agency_bio->value;
  }else{
    $bio = '';
  }

  if(!empty($user->field_agency_cell->value)){
    $cell = $user->field_agency_cell->value;
  }else{
    $cell = '';
  }
    
  if(!empty($user->field_agency_name->value)){
    $agency_name = $user->field_agency_name->value;
  }else{
    $agency_name = '';
  }

  if(!empty($user->field_agency_website->uri)){
    $website = $user->field_agency_website->uri;
  }else{
    $website = '';
  } 
    
  if(!empty($user->mail->value)){
    $email = $user->mail->value;
  }else{
    $email = '';
  }
    
  $file = File::load($user->user_picture->target_id);
  if(!empty($file)){
    $agency_logo = $file->getFileUri();
  }else{
    $agency_logo ='';
  }
  $variables['user_account_type'] = $user_account_type;
  $variables['country_name'] = $country_name;
  $variables['state_name'] = $state_name;
  $variables['agency_bio'] = $bio;
  $variables['agency_cell'] = $cell;
  $variables['agency_name'] = $agency_name;
  $variables['website'] = $website;
  $variables['agency_email'] = $email;
  $variables['agency_logo'] = $agency_logo;

  // $entity = \Drupal::entityTypeManager()->getStorage('user')->create(array());
  //   $formObject = \Drupal::entityTypeManager()
  //     ->getFormObject('user', 'register')
  //     ->setEntity($entity);
  //   $form = \Drupal::formBuilder()->getForm($formObject);
  //   $variables['register_form'] = \Drupal::service('renderer')->render($form);
  $customblock = \Drupal::service('plugin.manager.block')->createInstance('search_form_block', []);
  $variables['search_form'] = $customblock->build();
}