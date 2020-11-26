<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Handyhands extends Seeder
{
    
    protected $fillable = [
        'description',
        'uploaded_photo_path',
        'service_categories_id',
        'volunteer',
        'status_of_post',
        'lat',
        'long',
        'flag',
        'password',
        'profile_photo_path',
        'handy_points',
        'email',
        'name',
        'user_id',
        'service',
        'hopefuls_helpmates'


 ];


    /**
     * Run the database seeds.
     *
     @return void//  *
     */
    public function run() 
    
    {

       
        //
         // this function file_get_contents() changes contents to string , 
         $json_to_string = file_get_contents(storage_path('MockDataApi.json'));

         
         //json_decode <- takes json encoded data and converts it into a PHP variable
         $data = json_decode($json_to_string);

        //  dd($data);
          
     
          foreach($data as $item){

            $u = new \App\Models\User;
            $u->name = $item->name;
            $u->email = $item->email;
            $u->password = $item->password;
            $u->profile_photo_path = $item->profile_photo_path;
            $u->handy_points = $item->handy_points;
            $u->hopefuls_helpmates = $item->hopefuls_helpmates;
            $u->service = $item->service;
            $u->save();


            $i = new \App\Models\Location;

              $i->lat  = $item->lat ;
              $i->flag  = $item->flag ;
              $i->long  = $item->long ;
              $i->save();


                $id = new \App\Models\UserPost;
                $id->user_id = $u->id;
                $id->locations_id = $i->id;
                $id->description= $item->description;
                $id->uploadedm_photo_path= $item->uploadedm_photo_path;
                $id->helpmate= $item->volunteer;
                $id->status_of_post= $item->status_of_post;
                $id->save();
              

              

                    $t = new \App\Models\Message;

                    $t->uploadedm_photo_path = $id->uploaded_photo_path;
                    $t->from_users_id = $u->id ;
                    $t->to_users_id= $item->from;
                    $t->text = $item->message_content ;
                    $t->post_id  = $item->postNumber;
                    $t->save();
                    
          }
    }
}
