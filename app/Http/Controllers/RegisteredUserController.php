<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateIdeaRequest;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facade\Auth;

class RegisteredUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(UpdateIdeaRequest $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'Registration complete!');
    }
}
