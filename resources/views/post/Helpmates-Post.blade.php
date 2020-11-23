
@extends('layouts.app')

@section('content')


@foreach ($user as $item)
    

<div class="py-12">
    
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <p >
                    <strong>{{$user->name}}</strong>
            <img src="{{$user->profile_photo_path}}" alt="profile picture">
              {{-- need to get the post  of the selected users --}}
                  
            </p>
        </div>
</div>

@endforeach
@endsection