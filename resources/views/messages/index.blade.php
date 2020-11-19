
@extends('layouts.app')

@section('content')
<h1>Messages</h1>

<form action="{{ action('MessageController@store') }}" method="POST">
    @csrf
    <label for="text">Type your message</label>
    <input type="text" name="text" id="text"/>
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

