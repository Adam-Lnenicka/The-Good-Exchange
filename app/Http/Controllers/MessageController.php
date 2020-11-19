<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Controllers\UserPost;
use Auth;  

class MessageController extends Controller
{
    //
    public function index()
    {
        $messages = Message::with('aUser')->get();
        //dd($messages);
        return view('messages/index', compact('messages'));
    }

    public function create()
    {

    }
    public function store(Request $request)
    {
        $message = new Message;
        $message->text = $request->input('text');
<<<<<<< HEAD
        $message->from_users_id = Auth::id();
       //$message->user_id = 3;
=======
        $message->post_id= UserPost::id();
        $message->from_users_id = Auth::id();
        $message->to_users_id = Auth::id();

    //    $message->user_id = 3;
>>>>>>> ac7024b37411d5bee3146be8988e84d774eefbba
        
        $message->save();

        return redirect(action('MessageController@index'));
    }
}
