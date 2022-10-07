<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        $success = auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);
        if ($success) {
            return redirect('/teams');
        } else return back()->withErrors([
            'message' => 'Please check your credentials'
        ]);
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/teams');
    }
}