<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateUserRequest;
use App\Mail\MailVerified;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
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

        Mail::to($user)->send(new MailVerified($user));
        session()->flash('message', 'Please verify your email');
        return redirect('/login');

        // auth()->login($user);
        // return redirect('/teams');
    }

    public function update(User $user)
    {
        $user->is_verified = true;

        return redirect('/login');
    }
}