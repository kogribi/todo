<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view("auth.register");
    }
    public function store(Request $request) {
        $validated = $request->validate([
            "name" => ['required'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => ["required", Password::min(6)->numbers()->letters()->symbols(), "confirmed"]
          ]);
          $user = User::create($validated);
          Auth::login($user);
          return redirect("/auth");
      }
}