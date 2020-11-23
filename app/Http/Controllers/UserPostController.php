<?php

namespace App\Http\Controllers;

use App\Models\UserPost;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Location;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
         $allpost = UserPost::get();

         return view('dashboard', compact('allpost'));
        //
    }

    public function helpmates(){
        $user = User::where('hopefuls_helpmates','helpmate')
              ->UserPost::where('user_id','id')
              ->get();
                
 dd($user);
        return view('post.Helpmates-Post', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    //create a post in react 
    {
        return view('post.createpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($user_id, Request $request)
    {
        $user =User::findOrFail($user_id);

        $post = New UserPost;
        // $post->= $user->id Auth::id();
        $post->cost=$request->input('text');
        $post->description =$request->input('text');
        $post->uploadedm_photo_path =$request->input('file');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPost  $userPost
     * @return \Illuminate\Http\Response
     */
    public function show(UserPost $userPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserPost  $userPost
     * @return \Illuminate\Http\Response
     */
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
        //
    }
    public function api(){
        $postdata = UserPost::get();
<<<<<<< HEAD

<<<<<<< HEAD
        $jsonData=  json_encode($postdata);

        var_dump($jsonData);
=======
        
        return $postdata;

        // return view('api.postApi' , compact('jsonData'));


>>>>>>> b329453e601d3261a7d5ffd7f04845ab2cd8d1a6
=======
        return($postdata);
>>>>>>> b2bee94f9cdbd4daf53abef7f7f16cb1bd33b633

    }
}
