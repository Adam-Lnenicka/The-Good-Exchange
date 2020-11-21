@extends('layouts.app')
@section('content')
    
<div class="profile">

    <div class="background">
        <div class="picture">
<<<<<<< HEAD
            <img src="{{ $users->profile_photo_path }}">
=======
        <img src="{{ $users->profile_photo_path }}"> 
>>>>>>> 0a73f866dded632d0684c6edf90224d155d0dd0a
        </div>
    </div>
    <form action ="upload.php" method="post" enctype="multipart/form-data">
        <input class="link profile-img-btn" type="file" name="profile-img" style="">
    </form> 
</br>

<h1>{{ $users->name }}</h1>



<a class ="link" href="#">I need help now!</a>
<a class ="link" href="#">I want to help!</a>

<div class="info">
    <h2>Email: {{ $users->email }}</h2>
    <h2>Phone number: {{ $users->phone_number }}</h2>
    <h2>About me: {{ $users->about }}</h2>
    <h2>What do I need help with?: {{ $users->need_help }}</h2>
    <h2>How can I help?: {{ $users->provide_help }}</h2>
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


