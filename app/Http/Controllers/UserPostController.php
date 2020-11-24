<?php

namespace App\Http\Controllers;

use App\Models\UserPost;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\DB;
use Auth;  

class UserPostController extends Controller
{
    
    public function index()
    {  

        // this is currently rendered in React
         $allpost = UserPost::get();

         return view('dashboard', compact('allpost'));
        //
    }

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
   // how to get the auth ID from the user
    // $user =User::findOrFail($user_id);

      
    $file = $request->file('uploadedm_file_path');
    $file->storeAs('public/images', $file->getClientOriginalName());
    $relative_url_to_uploaded_file = '/images/ ' . $file->getClientOriginalName();
         

         $post = New UserPost;
         $post->user_id= Auth::id();
         $post->uploadedm_photo_path = $relative_url_to_uploaded_file;
         $post->description =$request->input('description', 'default');
         $post->save();

         return redirect(action('UserPostController@create'));
}
            
            

    public function show(UserPost $userPost)
    {
        //
    }

    public function edit(UserPost $userPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserPost  $userPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserPost $userPost)
    {
        //
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

      $postdata = UserPost::orderBy('created_at' , 'desc')->with('Location')->get();
      return($postdata);

}}


