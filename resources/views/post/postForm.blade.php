@extends('layouts.app')



@section('content')

 @if (Session::has('success_message'))

    <div class="alert alert--success">{{ Session::get('success_message') }}</div>

@endif

{{-- display errors --}}
 @if ($errors->count())

    @foreach ($errors->all() as $error)

        <div class="alert alert--error">{{ $error }}</div>

    @endforeach

@endif 

<form  name="postform" 
       enctype="multipart/form-data" 
       class =" rounded-2xl container mt-6 shadow-xl p-4  max-w-md  m-auto flex-1 " 
       action="{{ action('UserPostController@store')}}" 
       method="post" >


    @csrf
    <div class="mt-6">
       
    <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">

          <div class="text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" 
                    stroke="currentColor" 
                    fill="none" 
                    viewBox="0 0 48 48">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
          </div>
           
              <div 
          class="font-medium text-indigo-600 ">

                      
                  <label for="uploadedm_file_path"></label> 
        
                  <input  
                      class="post-btn"
                      type="file" 
                      name="uploadedm_file_path" />  
          </div>
   </div>



     <div>
                  <label  for="description" 
                    placeholder="How can we help?"></label>

                  <textarea   
                    input="text" 
                    name="description" 
                    class=" my-4  bg-orange-200 rounded-2xl h-20 w-full" type="textarea" 
                    rows="4" 
                    cols="50" > 
                  </textarea>

    </div>

    <button 
    class="w-11/12 block mx-3  my-3 py-2 rounded-md  bg-purple-400 focus:outline-none focus:shadow-outline ... "  
    value="submit" 
    type="submit">Post</button>
</form> 



@endsection