<?php

namespace App\Http\Controllers;

use App\Models\UserPost;
use Illuminate\Http\Request;
use App\Models\Message;
use Auth;  

class MessageController extends Controller
{
    //
    public function index($post_id)
    {

        $messages = Message::where('post_id' , $post_id)->get();

        return view('messages/index', compact('messages', 'post_id'));
    }

    public function Allmessages(){

    
    }

    public function create($post_id)
    {

        $post_id = UserPost::find($post_id);
        return view('messages.index', compact('post_id'));

    }
    public function store( $post_id , Request $request)
    {

        $message = new Message;
        $message->text = $request->input('text');
        $message->post_id= $post_id;
        $message->from_users_id = Auth::id();
        $message->to_users_id = Auth::id();
        $message->save();

        return redirect(action('MessageController@index', compact('post_id')));
    }

    public function indexx( )
    {

        //$post = UserPost::findOrFail($post_id); 
       
        $messages = Message::where('post_id', $post_id)->with('UserPost')->with('toUser')->with('fromUser')->get();

    //    dd($messages);
        return view('messages/index', compact( 'messages'));
    }

public function mymessages( )
    {

        //$post = UserPost::findOrFail($post_id); 
       
        $messages = Message::where('to_users_id', Auth::id())->orWhere('from_users_id', Auth::id())->with('UserPost')->with('toUser')->with('fromUser')->get();

    //    dd($messages);
        return view('messages/index', compact('messages'));
    }


}
