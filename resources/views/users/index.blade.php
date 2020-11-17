<h1>Users Management</h1>


@foreach($users as $user)
    <p>
        <a href="{{ action('UserController@index', $users->id) }}">
        
            <strong>{{ $user->name }}</strong>
        </a>

    </p>
@endforeach