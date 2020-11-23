@extends('layouts.app')
 @section('content')
<<<<<<< HEAD
<h1 class="" >Update profile {{ $users->name }}</h1>
<h2>Tell us more about yourself</h2>
=======
<h3 class="" >Update profile: {{ $users->name }}</h3>

>>>>>>> 435baccb28713ee36400f3f6d9cac1e02b4ac4a5

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class=""  action="{{ action('UserController@update', [$users->id]) }}" method="POST"  enctype="multipart/form-data">
    @csrf

    @method('PUT')
    <div class="picture">
        <img src="{{ $users->profile_photo_path }}"> 
    </div>
    <input class="custom-file-input" type="file" name="profile_photo_path" >

    <h2>Tell us more about yourself</h2>
    <main>
        <div class="info">
        <label for ="name">Name:</label>
        <input class="input" type="text" name="name" value="{{ $users->name }}"/>
        </br>

        <label for ="email">Email</label>
        <input class="input" type="text" name="email" value="{{ $users->email }}"/>
        </br>

        <label for ="phone">Phone number: </label>
        <input class="input" type="telephone" name="phone_number" value="{{ $users->phone_number }}"/>
        </br>

        <label for ="email">Tell the community something about yourself. </label>
        </br>
        <textarea rows="7" cols="80"name="about" value="{{ $users->about }}"></textarea>
        </br>

        <p>Check options that apply</p>
        <label for ="hopeful">I would like to be a Helpmate (offer help) </label>
        <input type="checkbox" name="hopeful" id="hopeful" value="{{ $users->hopeful }}"/>
        <label for ="hopeful">I am Hopeful  (need help)</label>
        <input type="checkbox" name="helpmate" id="helpmate" value="{{ $users->helpmate }}"/>
        </br>

        <label for ="email">Services </label>
        <input  class="input"type="text" name="provide_help" value="{{ $users->provide_help }}"/>
        </br>

        <input class="link" type="submit" value="submit">
        </div>
    </main>
<br/>
</form>

@endsection
