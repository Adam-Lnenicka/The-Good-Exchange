
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
                margin: 1em;
                border: none;
            
        }
        </style>
    
<div class="profile">

    <div class="background">
        <div class="picture">
            <h2>Profile picture</h2>
        </div>
    </div>

<h1>User Profile</h1>
<div class="info">
<h2>First Name: {{ $users->firstname }}</h2>

<h2>Last Name: {{ $users->lastname }}</h2>

<h2>Email: {{ $users->email }}</h2>

<h2>Phone number: {{ $users->phone_number }}</h2>
</div>
<br/>


<div class="info">
<h2>About me: {{ $users->about }}</h2>
<h2>What do I need help with?: {{ $users->need_help }}</h2>
<h2>How can I help?: {{ $users->provide_help }}</h2>
<h3>fdhsaiu</h3>
</div>



<a href="{{ action('UserController@edit', [$users->id]) }}">Update Profile</a>



<form action="{{ action('UserController@destroy', [$users->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete profile">
</form>

<a href="{{ action('UserController@index') }}">Back to index</a>
</div>

</body>
</html>
        </div>
    </body>
</html>


