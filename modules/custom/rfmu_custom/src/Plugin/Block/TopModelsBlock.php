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
 *   id = "top_models_block",
 *   admin_label = @Translation("Top Models"),
 *   category = @Translation("rfmu custom"),
 * )
 */
class TopModelsBlock extends BlockBase {

  
  public function build() {
     $query = \Drupal::database()->select('users_field_data','ufd');
    $query->join('user__roles','ur','ur.entity_id=ufd.uid');
    $query->join('user__field_agency_name','uan','uan.entity_id=ufd.uid');
    $query->join('user__user_picture','up','up.entity_id=ufd.uid');
    $query->condition('ur.roles_target_id', 'agency');
    $query->condition('ufd.status', 1);
    $query->fields('ufd',['uid']);
    $query->fields('uan',['field_agency_name_value']);
    $query->fields('up',['user_picture_target_id']);
    $query->range(0,6);
    $query->orderBy('ufd.uid','DESC');
    $result = $query->execute()->fetchAll();

   // dd($result);die;
    foreach($result as $row){
        if(!empty($row->user_picture_target_id)){
            $file = File::load($row->user_picture_target_id);
        }
  
            if(!empty($file)){
              // $model_pic = $file->getFileUri();
               $agency_logo = $file->createFileUrl();
            }else{
               $theme = \Drupal::theme()->getActiveTheme();
               $agency_logo = base_path().$theme->getPath().'/images/default-user.png';
        }

       
      $data[] = [
           'agency_logo' => $agency_logo,
           'agency_name' => $row->field_agency_name_value,
           'agency_id' => $row->uid,
      ];
    }
    //dd($data);die;

         return [ 
         '#theme' => 'topModels',
         '#top_models' => $data,
     ];

  }

}