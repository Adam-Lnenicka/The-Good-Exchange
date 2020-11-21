@extends('layouts.app') 
@section('content')
<div class = "profile">
    <h1>Top Helpmates</h1>
        <table class="table-striped">
  
                <th>
                    <td>
                        User Image
                    </td>
                    <td>
                        Name
                    </td>
                    <td>
                        Handy points
                    </td>
                    <td>
                        Email
                    </td>

                </th>

                <tbody>
                    @foreach ($users as $user)
                    
                        <tr>
                            <td></td>
                            <td><img src="{{ $user->profile_photo_path }}"></td>
                            

                            <td><a class="link" href="{{ action('UserController@show', [$user->id]) }}">{{ $user->name }}</a></td>

                            <td>{{ $user->handy_points }}</td>
                            <td>{{ $user->hopefuls_helpmates }}</td>
                            <td>{{ $user->service}}</td>
                            <td>{{ $user->email }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
</div>
    @endsection