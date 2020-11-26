<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserApiController extends Controller
{
    //
    public function search(Request $request)
    {
       // return  '%' . $request->input('search') . '%';
        return User::where('name', 'like', '%' . $request->input('search') . '%' )->get();
    }
}
