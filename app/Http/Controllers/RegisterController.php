<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){


        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns:users',
            'password' => 'required|min:5|max:100'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registration Successfull!');

        return redirect('/login');

    }
}
