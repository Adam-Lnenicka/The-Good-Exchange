  
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        
        $users = User::orderBy('handy_points', 'desc')->get();


        if($users->count() === 0){
            return 'no users';
        }

        return view('users/index', compact('users'));
    }

    public function helpmate()
    {
        
        $users = User::where('hopefuls_helpmates','=','helpmate') ->get();
        if($users->count() === 0){
            return 'no users';
        }
        return view('users/helpmate', compact('users'));
    }

    public function helpmate_food()
    {
        
        $users = User::where('hopefuls_helpmates','=','helpmate')->where ('service','=','food delivery')->get();
        if($users->count() === 0){
            return 'no users';
        }
        return view('users/helpmate', compact('users'));
    }

    public function helpmate_medicine()
    {
        
        $users = User::where('hopefuls_helpmates','=','hopeful')->where('service','=','medicine delivery')->get();
        if($users->count() === 0){
            return 'no users';
        }
        return view('users/helpmate', compact('users'));
    }

    public function helpmate_handy()
    {
        
        $users = User::where('hopefuls_helpmates','=','hopeful')->where('service','=','handy man')->get();
        if($users->count() === 0){
            return 'no users';
        }
        return view('users/helpmate', compact('users'));
    }

    public function hopeful()
    {
        
        $users = User::where('hopefuls_helpmates','=','hopeful') ->get();
        if($users->count() === 0){
            return 'no users';
        }
        return view('users/hopeful', compact('users'));
    }

    public function hopeful_food()
    {
        
        $users = User::where('hopefuls_helpmates','=','hopeful')->where ('service','=','food delivery')->get();
        if($users->count() === 0){
            return 'no users';
        }
        return view('users/hopeful', compact('users'));
    }

    public function hopeful_medicine()
    {
        
        $users = User::where('hopefuls_helpmates','=','hopeful')->where('service','=','medicine delivery')->get();
        if($users->count() === 0){
            return 'no users';
        }
        return view('users/hopeful', compact('users'));
    }

    public function hopeful_handy()
    {
        
        $users = User::where('hopefuls_helpmates','=','hopeful')->where('service','=','handy man')->get();
        if($users->count() === 0){
            return 'no users';
        }
        return view('users/hopeful', compact('users'));
    }

    public function show($id)
    {
        $users = User::findOrFail($id);

 


        return view('users/show', compact('users'));

    }

    public function create()
    {
        return view('users/create');
    }

    public function store(Request $request)
    {

        $user = new User;
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->save();

        if($file = $request->file('profile_photo_path')) {

            foreach ($file as $one_file) {

                // store the file onto disk 'uploads'
                // as /covers/original-name.jpg 
                // absolute: /public/uploads/covers/original-name.jpg
                // where original-name.jpg is the original name of the uploaded file
                $one_file->storeAs('covers', $one_file->getClientOriginalName(), 'uploads');

            }

            $relative_url_to_uploaded_file = '/uploads/covers/' . $one_file->getClientOriginalName();

            $book->image = $relative_url_to_uploaded_file;

            $book->save();
        }

 
        User::create($request);

        return redirect(action('UserController@show'));
        


    }

    public function edit($id)
    {
        $users = User::findOrFail($id);

        return view('users/edit', compact('users'));
    }

    public function update($id, Request $request)
    {
        $users = User::findOrFail($id);
        $users->update($request->all());

        return redirect(action('UserController@index'));
    }

    public function delete($id)
    {
        $users = User::findOrFail($id);

        return view('categories/delete', compact('users'));
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);

        $users->delete();

        return redirect(action('UserController@index'));
    }
}