<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        
        $users = User::get();

        if($users->count() === 0){
            return 'no users';
        }

        return view('users/index', compact('users'));
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


