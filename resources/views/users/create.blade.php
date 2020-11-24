<h1>New User</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ action('UserController@store') }}" method="POST">
    @csrf
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" id="first_name"/>
    <br/>
    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" id="last_name"/>
  
</form>