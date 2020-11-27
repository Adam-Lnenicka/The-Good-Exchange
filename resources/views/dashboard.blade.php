@extends('layouts.app')
@section('content')
  
<div class=>
  <a class ="link object1 " href="{{ action('UserController@hopeful') }}">Find hopefuls</a>
</div>


<div>
  
  <div class=>   
    <a class ="link object2 " href="{{ action('UserController@helpmate') }}">Find helpmates</a>
  </div>
  <br>
  <br>
   
  <div style="text-align: left; margin-left:0;">   
    <a class ="link object2 " href="{{ action('UserSearchController@search') }}">User search </a>
  </div>
</div>

    <div class="max-w-xl  mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          
          <div id="app"></div>
          
        <script src="{{asset('js/app.js')}}"></script>
        </div>
    </div>

    

@endsection
    