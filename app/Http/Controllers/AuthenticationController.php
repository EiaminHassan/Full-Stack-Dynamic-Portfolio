<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
    function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect('admin/dashboard'); // Assuming you have a dashboard view for authenticated users
        }else {
            return redirect('login');
        }
    }
    function register(Request $request){
        // Registration logic here
        // Validate and create user
        // Redirect to login or dashboard
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('login');
    }
}
