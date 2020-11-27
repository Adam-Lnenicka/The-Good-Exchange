<?php

namespace App\Http\Controllers;

use App\Models\UserPost;
use App\Models\User;
use App\Models\Location;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;  

class UserPostController extends Controller
{
    
    

    public function helpmates(){
        $user = User::where('hopefuls_helpmates','helpmate')
            //   ->UserPost::where('user_id','id')
              ->get();
                
        return view('post.Helpmates-Post', compact('user'));
    }

    public function create()
    {
        return view('post.postForm');
    }

    
    public function store( Request $request)
    {
        
   // Below code store  new post into database  with uploaded file   
    $file = $request->file('uploadedm_file_path');
    $file->storeAs('public/images', $file->getClientOriginalName());
    $relative_url_to_uploaded_file = '/storage/images/' . $file->getClientOriginalName();
         

         $post = New UserPost;
         $post->user_id= Auth::id();
         $post->uploadedm_photo_path = $relative_url_to_uploaded_file;
         $post->description =$request->input('description');

         //$croppa = 'Croppa::url('   . $relative_url_to_uploaded_file  .  ')';
         $post->save();
      
         return redirect(route('dashboard'));
}
         
     

    public function edit($id)
    {
        $post = UserPost::findOrFail($id);

        return view('post.updatePost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserPost  $userPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post_id)
    {
        $post = User::findOrFail($post_id);
        $post->update($request->all());
        if($file = $request->file('uploadedm_file_path')) {
                
            $file->storeAs('public/covers', $file->getClientOriginalName());
            $post->profile_photo_path = '/storage/covers/' . $file->getClientOriginalName();
            $post->save();
        
         }
         return redirect(route('dashboard'));
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPost  $userPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPost $userPost)
    {
    
    }

    public function api(){
        
      //with location data and service category info 
      //Location below is the referenceing the exactly relationship  from the model 

      $postdata = UserPost::orderBy('created_at' , 'desc')->with('Location')->with('User')->get();
  
      return($postdata);

    }

      public function mypost( )
      {
          //$my = User::findOrFail($id);
           
          $myposts = UserPost::where('user_id',Auth::id())->with('User')->get();
         //dd($myposts);
      
          return view('post.mypost', compact('myposts'));
  
      }

}

