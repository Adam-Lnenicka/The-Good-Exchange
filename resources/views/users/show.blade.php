@extends('layouts.app')
@section('content')
    
<div class="profile">

    <div class="background 2">
        <div class="picture">
        <img style="user-photo" src="{{ $users->profile_photo_path }}"> 
        </div>
    </div> 
</br>

<h1>{{ $users->name }}</h1>



<a class ="link" href="{{ route('dashboard') }}">I want to get involved now!</a>


<div class="info">
    <p><strong>Email:</strong> {{ $users->email }}</p>
    <p><strong>Phone number:</strong> {{ $users->phone_number }}</p>
    <p><strong>About me:</strong> {{ $users->about }}</p>
    <p><strong>Are you Hopeful (need help) or Helpmate (want to help)?</strong>{{ $users->hopefuls_helpmates }}</h2>
    <p><strong>What do you focus on? </strong>{{ $users->service }}</p>
</div>

<a class ="link" href="{{ action('UserController@edit', [$users->id]) }}">Update Profile</a>

<form action="{{ action('UserController@destroy', [$users->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input class ="link" type="submit" value="Delete profile">
</form>

<a class ="link" href="{{ action('UserController@index') }}">Back to index</a>
</div>

@endsection


