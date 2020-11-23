@extends('layouts.app')

@section('content')
<div class="center">
<h1>Messages</h1>




@foreach($messages as $message)

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

@endforeach


<form action="{{ action('MessageController@store', $post_id) }}" method="POST">
    @csrf
    <label for="text">Type your message</label>
    <input  class=" mt-9 w-4/5 sm:rounded-lg  bg-orange-200 " type="text" name="text" id="text"/>
    <br/>
</form>
@endsection