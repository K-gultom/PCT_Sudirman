<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Auth.login');
    }

    public function store(Request $req)
    {
        $req -> validate([
            "email" => 'required|min:6|max:50|email|exists:users,email',
            "password" => 'required|min:6|max:20',
        ]);

        $user = User::where('email',$req->email)->first();
        
        if(Hash::check($req -> password, $user -> password)){

            Auth::attempt(['email' => $req -> email, 'password' => $req -> password]);
            return redirect('/home');

        }else{
            return redirect()->back()->withErrors(['password' => 'Password Tidak Sesuai']);
        }
    }

    public function logout(){

        Auth::logout();
        return redirect('/');

    }
    
}
