@extends('layouts.app')
@section('content')
    
<div class="profile">

    <div class="background">
        <div class="picture">
        <img src="{{ $users->profile_photo_path }}"> 
        </div>
    </div>

<h3>{{ $users->name }}</h3>



<a class ="link" href="#">I need help now!</a>
<a class ="link" href="#">I want to help!</a>

<div class="info">
    <p><strong>Email:</strong> {{ $users->email }}</p>
    <p><strong>Phone number: </strong>{{ $users->phone_number }}</p>
    <p><strong>About me:</strong> {{ $users->about }}</p>
    <p><strong>Type of user</strong> {{ $users->hopefuls_helpmates}}</p>
    <p><strong>Sercice specialisation: </strong>{{ $users->service }}</p>
</div>

<a class ="link" href="{{ action('UserController@edit', [$users->id]) }}">Update Profile</a>

<form action="{{ action('UserController@destroy', [$users->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input class ="link" type="submit" value="Delete profile">
</form>

<a class ="link" href="{{ action('UserController@index') }}">See all users</a>
</div>

@endsection


