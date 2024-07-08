<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    
    public function index(Request $req)
    {

        $data = Product::with('seller')->where('name', 'like', "%$req->search%")->get();
        $data = Product::inRandomOrder()->get();

        // Buat tampilan untuk menampilkan slider di halaman home

        return view('Dashboard.dashboard', compact('data'));

    }

}
