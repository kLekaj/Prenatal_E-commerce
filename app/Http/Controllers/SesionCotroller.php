<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SesionCotroller extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
    public function create()
    {
        return view('pages.auth.login');
    }
    public function store()
    {
        $attributes = request()->validate([
           'email' =>'required|email',
           'password' =>'required',
        ]);

        if (auth()->attempt($attributes)){
            session()->regenerate();
            return redirect('/')->with('success', 'Welcome back!');
        }

        throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified.']);
    }
}
