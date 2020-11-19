<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\UserPost;
use Auth;  

class MessageController extends Controller
{
    //
    public function index($post_id)
    {
    
        $messages = Message::where('post_id', $post_id)->with('fromUser')->get();
        //dd($messages);
        return view('messages/index', compact('post_id', 'messages'));
    }

    public function create()
    {

    }

    // takes user id of logged user and puts it to the database 
    public function store($post_id, Request $request)
    {
        $post = UserPost::findOrFail($post_id);

        $message = new Message;
        $message->text = $request->input('text');
        $message->post_id= $post->id;
        $message->from_users_id = Auth::id(); // ID of currently logged in user
        $message->to_users_id = $post->user_id; 

    //    $message->user_id = 3;
        
        $message->save();

        return redirect(action('MessageController@index', $post_id));
    }
}
