<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    public function index(){
        
        return view('Product.product');
    }

    public function add(){
        
        $iduser = Auth::user()->id;
        $category = Category::where('user_id', $iduser)->get();
        return view('Product.addProduct', compact('category'));
    }

    public function addproses(Request $req){

        $req->validate([
            'category' => 'required|exists:categories,id',
            'name' => 'required|min:3|max:50',
            'price' => 'required|integer',
            'photo' => 'required|mimes:png,jpg,jpeg',
        ]);

        
        
    }

    
}
