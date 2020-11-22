@extends('layouts.app')

@section('content')
<form  enctype="multipart/form-data" class =" rounded-2xl container mt-6 shadow-xl p-4  max-w-md  m-auto flex-1 " action="{{ action('UserPostController@store', Auth::id()) }}" method="post" >
    @csrf
    <div class="mt-6">
       <div class ="flex justify-start ">
            <label class="block text-sm leading-5 font-medium text-gray-700">
                <div class=" m-1">
                    <a href="" class="m-0"><img  class="profile-img-small mb-4" src="{{asset('/images/profilePic.jpg')}}" alt="Profile picture"></a>
                </div>
            </label>
       </div > 

    <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
          <div class="text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            <p class="mt-1 text-sm text-gray-600">
                {{-- <label for="uploadedm_file_path">Uplaod a file</label> --}}
              <button class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">

                {{-- use Js  or livewire to handle event and grab the data  --}}
               {{-- <input type="file" name="uploadedm_file_path" > --}}
               Upload a file
              </button>
              or drag and drop
            </p>
            <p class="mt-1 text-xs text-gray-500">
              PNG, JPG, GIF up to 10MB
            </p>
          </div>
      </div>
      </div>

    <div  >
        <label  for="description">Enter description</label>
        <input  class=" rounded-2xl h-20 w-full" type="textarea" rows="4" cols="50"  value="" name="">
    </div>

    <button class="w-11/12 block mx-3  my-3 py-2 rounded-md  bg-purple-400 focus:outline-none focus:shadow-outline ... "  type="">Post</button>
</form> 



@endsection