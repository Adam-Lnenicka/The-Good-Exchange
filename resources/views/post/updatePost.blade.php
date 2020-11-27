
@extends('layouts.app')
@section('content')

<h1>Edit Post</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form  name="postform" 
       enctype="multipart/form-data" 
       class =" rounded-2xl container mt-6 shadow-xl p-4  max-w-md  m-auto flex-1 " 
       action="{{ action('UserPostController@update' , [$post->id]) }}" 
       method="post" >

       @method('PUT')
    
    @csrf
    <div class="mt-6">
       
    <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">

          <div class="text-center">
            
                
              <label 
              for="uploadedm_file_path"></label> 
  
              <input  
                class="post-btn"
                type="file" 
                name="uploadedm_file_path" 
                value="{{$post->uploadedm_file_path}}"/>  
          </div>
   </div>


     <div >
                  <label  for="description" 
                    placeholder="How can we help?"></label>

                  <textarea   
                    input="text" 
                    name="description" 
                    class=" my-4  bg-orange-200 rounded-2xl h-20 w-full" type="textarea" 
                    rows="4" 
                    value="{{$post->description}}"
                    cols="50" > 
                    
                  </textarea>

    </div>

    <button 
    class="w-11/12 block mx-3  my-3 py-2 rounded-md  bg-purple-400 focus:outline-none focus:shadow-outline ... "  
    value="submit" 
    type="submit">Post</button>
</form> 
@endsection