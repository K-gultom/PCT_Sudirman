<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "email" => 'required|max:50|email|exists:users,email',
            "password" => 'required|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (Hash::check($request -> password, $user -> password)) {

            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            return redirect('/');

        } else {
            
            return redirect()->back()
            ->withErrors([
                'email' => 'Email is wrong, please check again!',
                'password' => 'Password is Invalid, please check again!!'
            ]);

        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
