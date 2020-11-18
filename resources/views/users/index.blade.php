<h1>Users Management</h1>



        

        <table class="table-striped">
            <thead>
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
                            <td><img src="{{ $user->profile_photo_path }}"></td>
                            <td></td>

                            <td><a href="{{ action('UserController@index', [$user->id]) }}">{{ $user->name }}</a></td>
                            <td>{{ $user->handy_points }}</td>
                            <td>{{ $user->email }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    </p>
