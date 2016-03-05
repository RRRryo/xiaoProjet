<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show', array('user' => $user));
    }
}
