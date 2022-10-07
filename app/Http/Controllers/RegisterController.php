<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateUserRequest;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(CreateUserRequest $request)

    {
        $user = new User;
        $validated = $request->validated();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);

        $user->save();
        auth()->login($user);
        return redirect('/teams');
    }
}