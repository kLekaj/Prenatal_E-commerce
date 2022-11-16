<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterCotroller extends Controller
{
    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' =>'required|max:255',
            'email' =>'required|email|max:255|unique:users,email',
            'password' =>'required|min:7|max:255',

            ]);
        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);
        auth()->login($user);
        session()->flash('success', 'Your account has been created.');
        return redirect('/')->with('success', 'Your account has been created.');
    }
}
