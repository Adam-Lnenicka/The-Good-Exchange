
@extends('layouts.app')

@section('content')
<div class="center">
<h1>Messages</h1>

<form action="{{ action('MessageController@store') }}" method="POST">
    @csrf
    <label for="text">Type your message</label>
    <input type="text" name="text" id="text"/>

    <label for="postId">Realted to Post </label>
    <input type="number" name="post_id" id="post_id"/>
  <button>reply</button>
    {{-- for testing i am adding a post id  --}}
    <br/>
</form>

@foreach($messages as $message)
    <p>
            <strong>{{ $message->text }}</strong>

<<<<<<< HEAD
            @if ($message->aUser)
            <p>{{ $message->aUser->name }}</p>
            @endif
    </p>
=======
<div class="py-12">
    <div class=" sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <p >
                    <strong>{{ $message->text }}</strong>

                    @if ($message->fromUser)
                    <p>{{ $message->fromUser->name }}</p>
            
                    @endif
            </p>
        </div>
    </div>

>>>>>>> 435baccb28713ee36400f3f6d9cac1e02b4ac4a5
@endforeach
@endsection

