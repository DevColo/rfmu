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
 *   id = "latest_blog_block",
 *   admin_label = @Translation("Latest Blog"),
 *   category = @Translation("rfmu custom"),
 * )
 */
class LatestBlogBlock extends BlockBase {

  
  public function build() {
    $query = \Drupal::database()->select('node_field_data','nfd');
    $query->condition('nfd.type', 'article');
    $query->condition('nfd.status', 1);
    $query->fields('nfd',['nid','title','uid']);
    $result = $query->execute()->fetchAll();
 
    
    $data = [];
    foreach($result as $row){
        $author = User::load($row->uid);
        $author_name = $author->name->value;
        
        $article = \Drupal::entityTypeManager()->getStorage('node')->load($row->nid);
        $article_body = $article->body[0]->value;
        $article_date = date('M d, Y',$article->created->value);
        
        $file = File::load($article->field_image[0]->target_id);
        $article_img = $file->getFileUri();
        //dd($article_img);die;
      $data[] = [
           'article_img' => $article_img,
           'article_title' => $row->title,
           'article_body' => $article_body,
           'article_date' => $article_date
      ];
    }
   //dd($data);die;

      return [ 
         '#theme' => 'latestBlog',
         '#article_data' => $data,
     ];

  }

}