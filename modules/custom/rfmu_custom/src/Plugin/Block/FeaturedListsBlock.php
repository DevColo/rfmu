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
    $query = \Drupal::database()->select('node_field_data','nfd');
    $query->join('node__field_model_rank','mr','mr.entity_id=nfd.nid');
    $query->join('node__field_model_profile','mp','mp.entity_id=nfd.nid');
    $query->condition('nfd.type', 'model');
    $query->condition('nfd.status', 1);
    $query->fields('nfd',['nid','title','uid']);
    $query->fields('mp',['field_model_profile_target_id']);
    $query->orderBy('mr.field_model_rank_value', 'ASC');
    $query->groupBy('nfd.uid');
    $result = $query->execute()->fetchAll();

    
    $data = [];
    foreach($result as $row){
        $agency = User::load($row->uid);
        $agency_name = $agency->field_agency_name->value;
        
        $file = File::load($row->field_model_profile_target_id);
        $model_profile = $file->getFileUri();
       
      $data[] = [
           'model_profile' => $model_profile,
           'agency_name' => $agency_name,
           'agency_id' => $row->uid,
      ];
    }
   // dd($data);die;

      return [ 
         '#theme' => 'featuredLists',
         '#featured_models' => $data,
     ];

  }

}