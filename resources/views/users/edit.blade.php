@extends('layouts.app')
 @section('content')
<h3 class="" >Update profile: {{ $users->name }}</h3>


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
    <div class="background 2">
        <div class="picture">
            <img class="user-photo"  src="{{ $users->profile_photo_path }} "> 
        </div>
    </div>
    <input class="custom-file-input" type="file" name="profile_photo" >

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
        <label for ="hopeful">I am Hopeful  (need help) </label>
        <input type="radio" name="hopeful" id="hopeful" value="hopeful"/>
        <label for ="hopeful">I would like to be a Helpmate (offer help)</label>
        <input type="radio" name="helpmate" id="helpmate" value="helpmate"/>
        </br>
        </br>

        <p>Is there anything that you specialise in/need primarily help with?</p>
            <label for ="food">Food Delivery</label>
            <input type="radio" name="hopefuls_helpmates" id="food" value="food-delivery"/>

            <label for ="medicine-delivery">Medicine Delivery </label>
            <input type="radio" name="hopefuls_helpmates" id="medicine-delivery" value="medicine delivery"/>

            <label for ="handy-man ">Handy man services</label>
            <input type="radio" name="hopefuls_helpmates" id="handy-man " value="handy man"/>
            
            <label for ="other">Other</label>
            <input type="radio" name="hopefuls_helpmates" id="other" value="other"/>
        </br>
        <button class ="link" type="submit">Submit</button>
    </main>
<br/>
</form>

@endsection
