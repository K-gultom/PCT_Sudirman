<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class katalogController extends Controller
{
        
    public function index(Request $r){
        
        $data = Product::with('seller')->where('name','like',"%$r->search%")->get();
        return view('Katalog.katalog', compact('data'));
    }
        
}
