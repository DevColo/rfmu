<?php

namespace Drupal\rfmu_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;
use Drupal\Core\Link;
use Drupal\user\Entity\User;
use Drupal\file\Entity\File;
/**
 * Provides a 'Custom form data' Block.
 *
 * @Block(
 *   id = "featured_lists_block",
 *   admin_label = @Translation("Featured Lists"),
 *   category = @Translation("rfmu custom"),
 * )
 */
class FeaturedListsBlock extends BlockBase {

  
  public function build() {
  //   $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
  // //$uid= $user->get('uid')->value;
  //   if($user->roles[0]->target_id == 'administrator'){
  //       $user_profile = $user->user_picture[0]->target_id;
  //       if (!empty($user_profile)) {
  //           $file = File::load($user_profile);
  //           $profile = $file->createFileUrl();
  //       }else{
  //           $theme = \Drupal::theme()->getActiveTheme();
  //           $profile = base_path().$theme->getPath().'/images/default-user.png';
  //       }
  //       $user_name = $user->name->value;
        
  //   }
    
    $query = \Drupal::database()->select('users_field_data','ufd');
    $query->join('user__roles','ur','ur.entity_id=ufd.uid');
    $query->join('user__field_first_name','ufn','ufn.entity_id=ufd.uid');
    $query->join('user__field_agency','ufa','ufa.entity_id=ufd.uid');
    $query->join('user__field_last_name','uln','uln.entity_id=ufd.uid');
    $query->join('user__user_picture','up','up.entity_id=ufd.uid');
    $query->condition('ur.roles_target_id', 'model');
    $query->condition('ufd.status', 1);
    $query->fields('ufd',['uid']);
    $query->fields('ufn',['field_first_name_value']);
    $query->fields('ufa',['field_agency_target_id']);
    $query->fields('uln',['field_last_name_value']);
    $query->fields('up',['user_picture_target_id']);
    $query->range(0,4);
    $query->orderBy('ufd.uid','ASC');
    $result = $query->execute()->fetchAll();

    //dd($result);die;
    $data = [];
    foreach($result as $row){
         $agency = User::load($row->field_agency_target_id);
         $agency_name = $agency->field_agency_name->value;
        
        $file = File::load($row->user_picture_target_id);
        $model_profile = $file->getFileUri();
       
      $data[] = [
           'model_profile' => $model_profile,
           'model_name' => $row->field_last_name_value, //$row->field_first_name_value,
           'model_id' => $row->uid,
           'agency_name' => $agency_name
      ];
    }
   //dd($data);die;

   //    return [ 
   //       '#theme' => 'topModels',
   //       '#top_models' => $data,
   //   ];
    //dd($data);die;

      return [ 
         '#theme' => 'featuredLists',
         '#featured_models' => $data,
     ];

  }

}