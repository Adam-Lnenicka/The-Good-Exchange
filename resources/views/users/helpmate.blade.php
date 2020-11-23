@extends('layouts.app') 
@section('content')
<div class="center">
    <h1>Helpmates List</h1>
    <h2>Find a Helpmate to help you out</h2>

    <div class="middle">
        <div class="flex">
            <div>
                <a class ="link" href="{{ action('UserController@hopeful') }}">Find hopefuls</a>
                <a class ="link" href="{{ action('UserController@helpmate') }}">Find helpmates</a>
            </div>  
            <div>
                <a class ="link2" href="{{ action('UserController@helpmate_food') }}">Food Delivery</a>
                <a class ="link2" href="{{ action('UserController@helpmate_medicine') }}">Medicine Delivery</a>
                <a class ="link2" href="{{ action('UserController@helpmate_handy') }}">Handy Man Services</a>
            </div>  
        </div>
    </div>
        <table class="table1">

        
            <thead>
                <th>
                    
            
                    <td class="row1">
                        User Image
                    </td>
                    <td class="row2">
                        Name
                    </td>
                    <td class="row3">
                        Handy points
                    </td>
                    <td class="row4">
                        Hopeful/Helpmate
                    </td>
                    <td class="row5">
                        Service
                    </td>
                    <td class="row6">
                        Email
                    </td>

                </th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                
                    <tr>
                        <td></td>
                        <td class="row1"><img src="{{ $user->profile_photo_path }}"></td>
                        <td class="row2"style=""><a class="link" href="{{ action('UserController@show', [$user->id]) }}">{{ $user->name }}</a></td>
                        <td class="row3"style="">{{ $user->handy_points }}</td>
                        <td class="row4">{{ $user->hopefuls_helpmates }}</td>
                        <td class="row5">{{ $user->service}}</td>
                        <td class="row6">{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

</div>
    @endsection
