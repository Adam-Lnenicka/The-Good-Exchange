<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSearchController extends Controller
{
    //
    public function search()
    {
        return view('users/user-search');
    }
}
