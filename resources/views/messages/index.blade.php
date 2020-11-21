
@extends('layouts.app')

@section('content')
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

            @if ($message->aUser)
            <p>{{ $message->aUser->name }}</p>
            @endif
    </p>
@endforeach
@endsection

