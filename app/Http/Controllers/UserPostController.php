<?php

namespace App\Http\Controllers;

use App\Models\UserPost;
use Illuminate\Http\Request;

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
        $helpmates = UserPost::where('handy_point', !null )->get();

        return view('dashboard', compact('helpmates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    //create a post in react 
    {
        return view('post.reactApp');
    }


    // public function showpost(){
    //     return view('post.showpost');
    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        //with location data and service category info 
        $postdata = UserPost::get();



        $data = json_encode($postdata);
        return $data;

        // return view('api.postApi' , compact('jsonData'));

    }
    // public function query(){
    //      $data = UserPost::query()
    //      ->// specfic quey parameters
    // }

    
}
