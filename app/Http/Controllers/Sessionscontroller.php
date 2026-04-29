<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store(LoginUserRequest $request)
    {
        $attributes = $request->validate();

        if (!Auth::attempt($attributes)) {
            return back()->withErrors(["We were unable to authenticate using the provided credentials."])->withInput();
        }
    
        $request->session()->regenerate();

        return redirect()->intended('/')->with('success', 'You are now logged in');
    }
}
