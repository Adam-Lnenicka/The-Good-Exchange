<<<<<<< HEAD
<h1>Update profile {{ $users->name }}</h1>
<h2>Tell us more about yourself</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
=======
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               
                        <div id="app"></div>


            <script src="{{asset('js/app.js')}}"></script>
            </div>
        </div>
>>>>>>> 5312aa229b9eda477960bde649a6602d1cd6d1f1
    </div>
@endif

<form action="{{ action('UserController@update', [$users->id]) }}" method="POST">
    @csrf

    @method('PUT')
    <div class="info">
    <label for ="email">Name:</label>
    <input type="text" name="name" value="{{ $users->name }}"/>
    </br>

    </br>
    <label for ="email">Email</label>
    <input type="text" name="email" value="{{ $users->email }}"/>
    </br>

    <label for ="email">Phone number: </label>
    <input type="text" name="phone_number" value="{{ $users->phone_number }}"/>
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