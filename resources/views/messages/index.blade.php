
@extends('layouts.app')

@section('content')
<div class="center">
<div class="flex">
  <div>
              @foreach($messages as $message)
   
    
        <div class="bg-white my-2 shadow-xl sm:rounded-lg w-48">

            <div>Posted by : {{$message->fromUser->name}} <br> <small>{{$message->userpost->created_at}}</small></div><br>

            <img src={{$message->userpost->uploadedm_photo_path}} alt="post picture">
                <div>{{$message->userpost->service_categories_id}}</div><br>
                <div>{{$message->userpost->description}}</div>
                <div>{{$message->userpost->cost}}</div><br>
                
    
        </div>
     
        <div>
            <form  action="{{ action('MessageController@store', $post_id) }}" method="POST">
                    @csrf
                    <div class="bg-white my-2 shadow-xl sm:rounded-lg w-48">
                        
                        <label for="text">Type your message</label>
                        <input  type="text" name="text" id="text"/>
                        <button class="msgbtn mt-2 h-10 ml-2 px-2 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white bg-purple-600 hover:bg-purple-600 focus:outline-none focus:text-black focus:bg-purple-400 transition duration-150 ease-in-out" >reply</button>
                    </div>   
                    <br/>
            </form>
       </div>
        
  </div>
    <div class="py-12 flex ">
        <div class=" sm:px-6 lg:px-8">
            <div >
                    
                           
                    <div class="bg-white my-3 shadow-xl sm:rounded-lg">
                                        
                                        <img src={{$message->fromUser->profile_photo_path}} alt="From User">
                                        <span>{{$message->fromUser->name}}</span>
                                        <br>
                                        <strong>{{ $message->text }}</strong>
                    </div>
                    <div class="justify-end my-3 bg-white shadow-xl sm:rounded-lg">
                        
                                            <img  class="ml-48 "src={{$message->toUser->profile_photo_path}} alt="To User">
                                            <span class="ml-52 "">{{$message->toUser->name}}</span> 
                                            <br>
                                            <strong>{{ $message->text }}</strong>
                    </div>
                                    
                            @endforeach
                
            </div>
        </div>

   </div> 
  
  </div>
</div>
@endsection

