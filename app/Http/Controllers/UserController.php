<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view('user.user')
        ->with('id', '2241760089')
        ->with('name', 'Hilmy Zaky');
    }
}
