<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(auth()->attempt($request->only('email','password'))){
            $request->session()->regenerate();
            return redirect()->route('pub.index');
        }

        return back()->withErrors(['ces identifiants ne sont pas reconnus'])->onlyInput('email');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('pub.index');
    }
}
