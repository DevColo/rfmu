<?php
namespace Drupal\rfmu_custom\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder;
use Drupal\Core\Database\Database;
use Drupal\views\Render\ViewsRenderPipelineMarkup;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\Component\Serialization\Json;
use Drupal\user\Entity\User;
use Drupal\file\Entity\File;



class RfmuController extends ControllerBase{
	public function getModels(){
    
      
      // if(isset($_GET['gender']) && $_GET['gender']!='all'){
      //    $sex = $_GET['gender'];
      //    $gen = $conn->select('taxonomy_term_field_data','term')->condition('term.tid',$sex)->fields('term',['name']);
      //    $gen = $gen->execute()->fetchAll();

      //    $query->join('node__field_model_gender','nfmg','nfmg.entity_id=nfd.nid');
      //    $query->join('taxonomy_term_field_data','ttfd','ttfd.tid=nfmg.field_model_gender_target_id');
      //    $query->condition('ttfd.tid',$sex);

      // }
      // if(isset($_GET['skin']) && $_GET['skin']!='all'){
      //    $skin = $_GET['skin'];
      //     $com = $conn->select('taxonomy_term_field_data','term')->condition('term.tid',$skin)->fields('term',['name']);
      //    $com = $com->execute()->fetchAll();

      //    $query->join('node__field_model_skin','nfms','nfms.entity_id=nfd.nid');
      //    $query->join('taxonomy_term_field_data','ttfd','ttfd.tid=nfms.field_model_skin_target_id');
      //    $query->condition('ttfd.tid',$skin);
      // }
      

// dd($result)

    //   // count available rows
    //   $num_rows = $query->countQuery()->execute()->fetchAll();
    //   $json = Json::encode($result);
    //  //dd( $num_rows[0]->expression );die;
    //  if(!isset($_GET['page'])){
    //  	$page = 1;
    //  }else{
    //  	$page = $_GET['page'];
    //  }
    //  $result_per_page = 20;
    //  $page_first_result = ($page - 1)* $result_per_page;
    //  $num_of_page =ceil($num_rows[0]->expression/$result_per_page);

    //  $new_result = $query->range($page_first_result,$result_per_page)->execute()->fetchAll();
    //   //dd($_GET['gender']); die();
    // // $all_models['all_models'] = \Drupal::formBuilder()->getForm('Drupal\rfmu_custom\Form\RfmuCustomForm');

    //    if (empty($gen[0]->name)) {
    //       $gen = 'All';
    //    }else{
    //      $gen = $gen[0]->name;
    //    }
    //    if (empty($com[0]->name)) {
    //       $com = 'All';
    //    }else{
    //      $com = $com[0]->name;
    //    }
    //     $count =0;
    //     $counter=[];
    //     for ($i=0; $i < $num_of_page; $i++) { 
    //        $count++;
    //        array_push($counter,$count);
    //     }
    //     //dd($counter);die;
    //    // No row or not
    //    if (empty($num_rows[0]->expression)) {
    //       $no_result = 'No Model Found';
    //    }else{
    //      $no_result = $num_rows[0]->expression.' Available Models';
    //    }
      
    //    $search_result = 'Search Results: Gender: '.$gen.'  Complexion: '.$com.' | '.$no_result;

       // dd($search_result);die;
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
    //$query->range(0,4);
    $query->orderBy('ufd.uid','DESC');
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
     return [ 
         '#theme' => 'all-models',
         '#data' => $data,
        // '#search_result' => $search_result,
        // '#counter' => $counter,
       //  '#form' => $form,
     ];
   }

   function aboutUsPage(){
      return [ 
         '#theme' => 'about-us'
      ];
   }

   function agenciesPage(){
      $ids = \Drupal::entityQuery('user')
            ->condition('status', 1)
            ->condition('roles', 'agency')->execute();
      $users = User::loadMultiple($ids);
      foreach($users as $user){
        
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

         if(!empty($user->user_picture->target_id)){
            $file = File::load($user->user_picture->target_id);
         }
  
         if(!empty($file)){
            $agency_logo = $file->getFileUri();
         }else{
            $agency_logo ='';
         }

         $agency[] =[
            'uid' => $user->get('uid')->getString(),
            'name' => $user->get('name')->getString(),
            'country' => $country_name,
            'state' => $state_name,
            'logo' => $agency_logo
         ];
      }
      // dd($agency);die;

      return [ 
         '#theme' => 'agenciesPage',
         '#agency' => $agency,
     ];
   }

   function modelRegisterForm(){
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

   function rfmuUsers($user_id){
      $user = User::load($user_id);
      //dd($user);die;
      if (!empty($user)) {
         if ($user->roles[0]->target_id == 'model') {
            $first_name = $user->field_first_name[0]->value;
            $last_name = $user->field_last_name[0]->value;
            $dob = strtotime($user->field_date_of_birth[0]->value);
            $dob = date('M d, Y',$dob);

            $country_id = $user->field_address[0]->country;
            $country = \Drupal::database()->select('countrylist_field_data','cl')->condition('cl.id',$country_id)->fields('cl')->execute()->fetchAll();
            if(!empty($country)){
               $country_name = $country[0]->name;
            }else{
               $country_name = '';
            }

            $state_id = $user->field_address[0]->state;
            $state = \Drupal::database()->select('statelist_field_data','sl')->condition('sl.id',$state_id)->fields('sl')->execute()->fetchAll();
            if(!empty($state)){
             $state_name = $state[0]->name;
            }else{
             $state_name = '';
            }

            //Model's Agengies
            foreach($user->field_agency as $model_agency){
               $my_agency = User::load($model_agency->target_id);
               if(!empty($my_agency->user_picture[0]->target_id)){
              $my_agency_pic = File::load($my_agency->user_picture[0]->target_id);
            }
  
            if(!empty($my_agency_pic)){
              // $model_pic = $file->getFileUri();
               $my_agency_pic = $my_agency_pic->createFileUrl();
            }else{
               $theme = \Drupal::theme()->getActiveTheme();
               $my_agency_pic = base_path().$theme->getPath().'/images/default-user.png';
            }
               $model_agencies[] = [
                  'agency_name' => $my_agency->field_agency_name[0]->value,
                  'agency_id' => $my_agency->uid[0]->value,
                  'my_agency_pic' => $my_agency_pic
               ];
            }

            //dd($model_agencies);die;

            //Model's eyes color
            $eyes_color = \Drupal\taxonomy\Entity\Term::load($user->field_eyes[0]->target_id);
            if(!empty($eyes_color)){
               $model_eyes_color = $eyes_color->name->value;
            }else{
               $model_eyes_color = '';
            }

            //Model's hair color
            $hair_color = \Drupal\taxonomy\Entity\Term::load($user->field_hair[0]->target_id);
            if(!empty($hair_color)){
               $model_hair_color = $hair_color->name->value;
            }else{
               $model_hair_color = '';
            }

            if(!empty($user->field_model_height[0]->value)){
               $model_height = $user->field_model_height[0]->value;
            }else{
               $model_height = '';
            }

            if (!empty($user->field_phone[0]->value)) {
               $model_phone = $user->field_phone[0]->value;
            }else{
               $model_phone = '';
            }
            
            if (!empty($user->field_profile[0]->value)) {
               $model_profile = $user->field_profile[0]->value;
            }else{
               $model_profile = '';
            }
            
            if (!empty($user->field_shoe[0]->value)) {
               $model_shoe = $user->field_shoe[0]->value;
            }else{
               $model_shoe = '';
            }
            

            if(!empty($user->user_picture[0]->target_id)){
              $file = File::load($user->user_picture[0]->target_id);
            }
  
            if(!empty($file)){
              // $model_pic = $file->getFileUri();
               $model_pic = $file->createFileUrl();
            }else{
               $theme = \Drupal::theme()->getActiveTheme();
               $model_pic = base_path().$theme->getPath().'/images/default-user.png';
            }

            $created = date('M d, Y',$user->created->value);
            // $model_data[] = [
            //    'first_name' => $first_name,
            //    'last_name' => $last_name,
            //    'dob' => $dob,
            //    'country_name' => $country_name,
            //    'state_name' => $state_name,
            //    'model_eyes_color' => $model_eyes_color,
            //    'model_hair_color' => $model_hair_color,
            //    'model_height' => $model_height,
            //    'model_phone' => $model_phone,
            //    'model_profile' => $model_profile,
            //    'model_shoe' => $model_shoe,
            //    'model_pic' => $model_pic
            // ];

           //dd($user);die;   
            //dd($model_data );die; 
            return [ 
               '#theme' => 'model_profile_page',
               '#model_profile' => $model_profile,
               '#first_name' => $first_name,
               '#last_name' => $last_name,
               '#dob' => $dob,
               '#country_name' => $country_name,
               '#state_name' => $state_name,
               '#model_eyes_color' => $model_eyes_color,
               '#model_hair_color' => $model_hair_color,
               '#model_height' => $model_height,
               '#model_phone' => $model_phone,
               '#model_profile' => $model_profile,
               '#model_shoe' => $model_shoe,
               '#model_pic' => $model_pic,
               '#created' => $created,
               '#model_agencies' => $model_agencies
            ];      
         }
   if ($user->roles[0]->target_id == 'agency' || $user->roles[1]->target_id == 'agency') {
            $account_type = \Drupal\taxonomy\Entity\Term::load($user->field_account_type->target_id);
           if(!empty($account_type)){
             $user_account_type = $account_type->name->value;
           }else{
             $user_account_type = '';
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

           if(!empty($user->user_picture->target_id)){
             $file = File::load($user->user_picture->target_id);
           }
           
           if(!empty($file)){
              // $model_pic = $file->getFileUri();
               $agency_logo = $file->createFileUrl();
            }else{
               $theme = \Drupal::theme()->getActiveTheme();
               $agency_logo = base_path().$theme->getPath().'/images/default-user.png';
            }

            $country_id = $user->field_agency_address[0]->country;
            $country = \Drupal::database()->select('countrylist_field_data','cl')->condition('cl.id',$country_id)->fields('cl')->execute()->fetchAll();
            if(!empty($country)){
               $country_name = $country[0]->name;
            }else{
               $country_name = '';
            }

            $state_id = $user->field_agency_address[0]->state;
            $state = \Drupal::database()->select('statelist_field_data','sl')->condition('sl.id',$state_id)->fields('sl')->execute()->fetchAll();
            if(!empty($state)){
             $state_name = $state[0]->name;
            }else{
             $state_name = '';
            }

            //Model in this Agency
            $all_my_models = \Drupal::entityTypeManager()->getStorage('user')->loadByProperties([
              'field_agency' => $user->uid->value,
            ]);
            $my_models_data= [];
            if (!empty($all_my_models)) {
               foreach($all_my_models as $my_models){
               if(!empty($my_models->user_picture[0]->target_id)){
                  $file = File::load($my_models->user_picture[0]->target_id);
               }
  
               if(!empty($file)){
                 // $model_pic = $file->getFileUri();
                  $model_pic = $file->createFileUrl();
               }else{
                  $theme = \Drupal::theme()->getActiveTheme();
                  $model_pic = base_path().$theme->getPath().'/images/default-user.png';
               }
               $my_models_data[] = [ 
               'm_fname' => $my_models->field_first_name[0]->value,
               'm_lname' => $my_models->field_last_name[0]->value,
               'm_uid' => $my_models->uid[0]->value,
               'm_pic' => $model_pic
            ];
               }
            }
            $created = date('M d, Y',$user->created->value);
            $account_type = \Drupal\taxonomy\Entity\Term::load($user->field_role[0]->target_id);
           if(!empty($account_type)){
             $user_account_type = $account_type->name->value;
           }else{
             $user_account_type = '';
           }
           //dd($user_account_type);die;
           return [ 
               '#theme' => 'agency_profile_page',
               '#user_account_type' => $user_account_type,
               '#country_name' => $country_name,
               '#state_name' => $state_name,
               '#agency_bio' => $bio,
               '#agency_cell' => $cell,
               '#agency_name' => $agency_name,
               '#website' => $website,
               '#agency_email' => $email,
               '#agency_logo' => $agency_logo,
               '#created' => $created,
               '#my_models_data' => $my_models_data
            ];   

         }

   if ($user->roles[0]->target_id == 'people') {
            $first_name = $user->field_first_name[0]->value;
            $last_name = $user->field_last_name[0]->value;
            $dob = strtotime($user->field_date_of_birth[0]->value);
            $dob = date('M d, Y',$dob);

            $country_id = $user->field_address[0]->country;
            $country = \Drupal::database()->select('countrylist_field_data','cl')->condition('cl.id',$country_id)->fields('cl')->execute()->fetchAll();
            if(!empty($country)){
               $country_name = $country[0]->name;
            }else{
               $country_name = '';
            }

            $state_id = $user->field_address[0]->state;
            $state = \Drupal::database()->select('statelist_field_data','sl')->condition('sl.id',$state_id)->fields('sl')->execute()->fetchAll();
            if(!empty($state)){
             $state_name = $state[0]->name;
            }else{
             $state_name = '';
            }
            if(!empty($people_pic)){
              // $model_pic = $file->getFileUri();
               $people_pic = $people_pic->createFileUrl();
            }else{
               $theme = \Drupal::theme()->getActiveTheme();
               $people_pic = base_path().$theme->getPath().'/images/default-user.png';
            }
            
            $people_phone = $user->field_phone[0]->value;
            $people_profile = $user->field_profile[0]->value;

            if(!empty($user->user_picture[0]->target_id)){
              $file = File::load($user->user_picture[0]->target_id);
            }
  
            if(!empty($file)){
              // $model_pic = $file->getFileUri();
               $people_pic = $file->createFileUrl();
            }else{
               $theme = \Drupal::theme()->getActiveTheme();
               $people_pic = base_path().$theme->getPath().'/images/default-user.png';
            }

            $created = date('M d, Y',$user->created->value);
            $people_role = \Drupal\taxonomy\Entity\Term::load($user->field_role[0]->target_id);
           if(!empty($people_role)){
             $user_people_role = $people_role->name->value;
           }else{
             $user_people_role = '';
           }

          // dd($first_name);die;   
            //dd($model_data );die; 
            return [ 
               '#theme' => 'people_profile_page',
               '#first_name' => $first_name,
               '#last_name' => $last_name,
               '#dob' => $dob,
               '#country_name' => $country_name,
               '#state_name' => $state_name,
               '#people_phone' => $people_phone,
               '#people_profile' => $people_profile,
               '#people_pic' => $people_pic,
               '#created' => $created,
               '#user_people_role' => $user_people_role,
            ];      
         }
    
   }else{
      return 'heyno';
   }
   }
}

