@extends('layouts.app')
@section('content')
<div class="py-12">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
           
        <div id="app"></div>


        <script src="{{asset('js/app.js')}}"></script>
        </div>
    </div>
</div>
@endsection