@extends('layouts.app')

@section('content')

 @foreach ($myposts as $post)

 <div  class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2.5 m-2.5" >
    <div>
    <img class="h-10  w-10" src={{$post->user->profile_photo_path}} alt="profile pic" />
    </div>
    <img class=""  src={{$post->uploadedm_photo_path}} alt="post pic"/>
    <div class=" p-2.5" >{{$post->description}}</div>
     <span class="">Cost:{{$post->cost}}</span>  
     <br/>
     <a class=" bg-purple-600 mt-2.5 -m-2mt-8 h-10 ml-2 px-2 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-purple-600 focus:outline-none focus:text-black focus:bg-purple-400 transition duration-150 ease-in-out"
     href=" ">See Cnnverstaions</a> 
    </div>
     
 @endforeach

@endsection