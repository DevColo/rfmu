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
 *   id = "new_models_block",
 *   admin_label = @Translation("New Models"),
 *   category = @Translation("rfmu custom"),
 * )
 */
class NewModelsBlock extends BlockBase {

  
  public function build() {
    // $query = \Drupal::database()->select('node_field_data','nfd');
    // $query->join('node__field_model_rank','mr','mr.entity_id=nfd.nid');
    // $query->join('node__field_model_profile','mp','mp.entity_id=nfd.nid');
    // $query->condition('nfd.type', 'model');
    // $query->condition('nfd.status', 1);
    // $query->fields('nfd',['nid','title','uid']);
    // $query->fields('mp',['field_model_profile_target_id']);
    // $query->orderBy('mr.field_model_rank_value', 'ASC');
    // $query->groupBy('nfd.uid');
    // $result = $query->execute()->fetchAll();

    
    // $data = [];
    // foreach($result as $row){
    //     $agency = User::load($row->uid);
    //     $agency_name = $agency->field_agency_name->value;
        
    //     $file = File::load($row->field_model_profile_target_id);
    //     $model_profile = $file->getFileUri();
       
    //   $data[] = [
    //        'model_profile' => $model_profile,
    //        'agency_name' => $agency_name,
    //        'agency_id' => $row->uid,
    //   ];
    // }
    $query = \Drupal::database()->select('users_field_data','ufd');
    $query->join('user__roles','ur','ur.entity_id=ufd.uid');
    $query->join('user__field_first_name','ufn','ufn.entity_id=ufd.uid');
    $query->join('user__field_last_name','uln','uln.entity_id=ufd.uid');
    $query->join('user__user_picture','up','up.entity_id=ufd.uid');
    $query->condition('ur.roles_target_id', 'model');
    $query->condition('ufd.status', 1);
    $query->fields('ufd',['uid']);
    $query->fields('ufn',['field_first_name_value']);
    $query->fields('uln',['field_last_name_value']);
    $query->fields('up',['user_picture_target_id']);
    $query->range(0,4);
    $query->orderBy('ufd.uid','DESC');
    $result = $query->execute()->fetchAll();

    //dd($result);die;
    $data = [];
    foreach($result as $row){
        // $agency = User::load($row->uid);
        // $agency_name = $agency->field_agency_name->value;
        
        $file = File::load($row->user_picture_target_id);
        $model_profile = $file->getFileUri();
       
      $data[] = [
           'model_profile' => $model_profile,
           'model_name' => $row->field_last_name_value, //$row->field_first_name_value,
           'model_id' => $row->uid,
      ];
    }
   // // dd($data);die;

   //    return [ 
   //       '#theme' => 'topModels',
   //       '#top_models' => $data,
   //   ];
    //dd($data);die;

      return [ 
         '#theme' => 'newModels',
         '#new_models' => $data,
     ];

  }

}