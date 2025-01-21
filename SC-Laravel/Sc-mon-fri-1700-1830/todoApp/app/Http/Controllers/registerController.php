<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(Request $r)
    {
        $r->validate([

            "name" => 'required|min:3|max:30',
            "email" => 'required|min:5|max:50|email|unique:users,email',
            "password" => 'required|confirmed|min:6', 
        ]);

        $new = new User();
        $new -> name = $r -> name;
        $new -> email = $r -> email;
        $new -> password = Hash::make($r -> password);
        $new -> save();
        
        return redirect('/register')->with('message', 'Registration Successful.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
