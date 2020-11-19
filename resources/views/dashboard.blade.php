@extends('layouts.app') 
 @section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
        </h2>
    </x-slot>
     
    <div id="show"></div>

       <script src="{{asset('js/app.js')}}" ></script>

   <p>Show post here </p>

@endsection  
