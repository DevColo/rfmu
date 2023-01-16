<?php

namespace Drupal\rfmu_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;
use Drupal\Core\Link;
/**
 * Provides a 'Custom form data' Block.
 *
 * @Block(
 *   id = "home_top_block",
 *   admin_label = @Translation("Home Top - People"),
 *   category = @Translation("rfmu custom"),
 * )
 */
class HomeTopBlock extends BlockBase {

  
  public function build() {
    $query = \Drupal::database()->select('taxonomy_term_field_data','ttfd');
    $query->condition('ttfd.vid', 'people');
    $query->fields('ttfd',['tid','name']);
    $query->orderBy('ttfd.tid', 'ASC');
    $result = $query->execute()->fetchAll();
    //dd($result);die;
    $data = [];
    foreach($result as $row){
        $aliasManager = \Drupal::service('path_alias.manager');
        $alias = $aliasManager->getAliasByPath('/taxonomy/term/'.$row->tid);

        $nodes = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
              'field_people_category' => $row->tid,
            ]);
        $people_amount = count($nodes);

         //dd($people_amount); die;
       

      $data[] = [
           'name' => $row->name,
           'link' => $alias,
           'counter' => $people_amount
      ];
    }
    //dd($data);die;
    

      return [ 
         '#theme' => 'hometoppeople',
         '#people' => $data,
         //'#counter' => $counter,
        // '#form' => $form,
     ];

  }

}