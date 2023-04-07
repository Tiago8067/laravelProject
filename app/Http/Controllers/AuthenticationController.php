<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function getLogin(){
        return view('user.authentication.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $validated = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password, 
        ]);

        if ($validated) {
            return redirect()->route('homePage')->with('success', 'Login Successfull');
        } else {
            return redirect()->back()->with('failure', 'Invalid credentials');
        }
    }
}
