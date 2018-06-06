<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
	    $users = User::all();
	    // dd($users);
		return view('users', compact('users'));
    }
}
