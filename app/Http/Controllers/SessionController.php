<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class SessionController extends Controller
{
    public function destroy(){
        Auth::logout();
        return redirect("/");
    }
    public function index(){
        return view("/auth.auth");
    }
    public function create(){
        return view("auth.login");
    }
    public function store(Request $request) {
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => ["required", Password::min(6)->numbers()->letters()->symbols(), "confirmed"]
          ]);
          Auth::attempt($validated);
          if (!Auth::attempt($validated)) {
          throw ValidationException::withMessages([
            "email" => "Nepareiz e-pasts vai parole"
          ]);
          }
          $request->session()->regenerate();
          return redirect("/auth");
    }

}
