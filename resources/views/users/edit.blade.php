<<<<<<< HEAD

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        *{
            font-family: Nunito;
            
        }
        .profile{
            max-width: 900px;
            margin: 4em auto;
        }
        

        .background{
            background-color: rgb(111, 115, 129);
            height: 350px;
            border-radius: 1em;
            display: flex;
            align-items:flex-end;
        }

        .picture{
            height:250px;
            width:200px;
            background-color: rgb(182, 193, 253);
            border-radius: 1em;
            display: flex;
            justify-content:center;
            align-items:center;
            color: white;
            border: 1px solid white;
            margin: 1em
        }

        .info{
            background-color:  rgb(218, 218, 218);
            padding: 0.3em 2em;
            border-radius: 1em;
            margin: 2.8em 0;
        }


        input, a{
            
                background-color: orange;
                padding: 0.3em 1.7em;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 1px;
                font-weight: 900;
                border-radius: 1em;
                color:black;
                font-size: 1rem;
                margin: 1em 0;
                border: none;
        }
        </style>


<h1>Update profile {{ $users->name }}</h1>
=======
@extends('layouts.app')
 @section('content')
<h1 class="" >Update profile {{ $users->name }}</h1>
>>>>>>> ac7024b37411d5bee3146be8988e84d774eefbba
<h2>Tell us more about yourself</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class=""  action="{{ action('UserController@update', [$users->id]) }}" method="POST">
    @csrf

    @method('PUT')
    <div class="info">
    <label for ="name">Name:</label>
    <input type="text" name="name" value="{{ $users->name }}"/>
    </br>

    </br>
    <label for ="email">Email</label>
    <input type="text" name="email" value="{{ $users->email }}"/>
    </br>

    <label for ="phone">Phone number: </label>
    <input type="telephone" name="phone_number" value="{{ $users->phone_number }}"/>
    </br>

    <label for ="email">Tell the community something about yourself. </label>
    <input type="text" name="about" value="{{ $users->about }}"/>
    </br>

    <label for ="email">What do I need help with? </label>
    <input type="text" name="need_help" value="{{ $users->need_help }}"/>
    </br>

    <label for ="email">How can I help? </label>
    <input type="text" name="provide_help" value="{{ $users->provide_help }}"/>
    </br>

    <input type="submit" value="submit">
    </div>
<br/>
</form>

<<<<<<< HEAD
</body>
</html>
=======
@endsection
>>>>>>> ac7024b37411d5bee3146be8988e84d774eefbba
