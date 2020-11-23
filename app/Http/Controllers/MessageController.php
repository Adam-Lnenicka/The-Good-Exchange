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
        $message->post_id= UserPost::id();
        $message->from_users_id = Auth::id();
        $message->to_users_id = Auth::id();

    //    $message->user_id = 3;
        
        $message->save();

        return redirect(action('MessageController@index'));
    }

    public function indexx($post_id)
    {

        $post = UserPost::findOrFail($post_id); 
        $user = Auth::user();

        $messages = Message::where('post_id', $post_id)->with('toUser')->get();
     
        // dd($messages);

        return view('messages/index', compact('post_id', 'messages'));
    }

}
