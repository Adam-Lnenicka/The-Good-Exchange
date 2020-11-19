@extends('layouts.app')
@section('content')
    
<div class="profile">

    <div class="background">
        <div class="picture">
        <img src="{{ $users->profile_photo_path }}">
            
        </div>
    </div>

</br>
<h1>{{ $users->name }}</h1>

<a href="#">I need help now!</a>
<a href="#">I want to help!</a>

<div class="info">
    <h2>Email: {{ $users->email }}</h2>
    <h2>Phone number: {{ $users->phone_number }}</h2>
    <h2>About me: {{ $users->about }}</h2>
    <h2>What do I need help with?: {{ $users->need_help }}</h2>
    <h2>How can I help?: {{ $users->provide_help }}</h2>
</div>

<a href="{{ action('UserController@edit', [$users->id]) }}">Update Profile</a>

<form action="{{ action('UserController@destroy', [$users->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete profile">
</form>

<a href="{{ action('UserController@index') }}">Back to index</a>
</div>

@endsection


