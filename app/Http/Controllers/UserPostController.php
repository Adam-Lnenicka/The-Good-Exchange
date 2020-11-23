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

            return redirect( view('/dashboard'));
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
        // $postdata = UserPost::get();


        $postdata =  DB::table('user_posts')->get();
        $locations = DB::table('locations')->select('lat','long','id')->get();
                         

        return($locations . $postdata );
        $postdata = UserPost::orderBy('created_at' , 'desc')->get();

}}


