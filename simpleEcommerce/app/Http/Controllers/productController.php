<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    public function index(){
        
        $iduser = Auth::user()->id;
        $data = Product::with('category')->where('user_id', $iduser)->get();
        
        return view('Product.product', compact('data'));

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
                
        $photo = $req -> file('photo');
        $new_photo_name = uniqid().".".$photo->getClientOriginalExtension();
        $photo -> move('images', $new_photo_name);

        $new = new Product();
        $new -> user_id = Auth::user()->id;
        $new -> category_id  = $req -> category;
        $new -> name = $req -> name;
        $new -> price = $req -> price;
        $new -> photo = $new_photo_name;
        $new -> save();
        return redirect('/product')->with('message', 'Add Product Success!!!');
    }

    public function edit($id){

        $iduser = Auth::user()->id;
        $category = Category::where('user_id', $iduser)->get();
        $data = Product::findOrFail($id);
        return view('Product.editProduct', compact('category', 'data'));
    }

    public function editProses(Request $req, $id){
        $req->validate([
            'category' => 'required|exists:categories,id',
            'name' => 'required|min:3|max:50',
            'price' => 'required|integer',
            'photo' => 'mimes:png,jpg,jpeg',
        ]);

        if ($req->file('photo')) {
            $photo = $req -> file('photo');
            $new_photo_name = uniqid().".".$photo->getClientOriginalExtension();
            $photo -> move('images', $new_photo_name);
        }

        $new = Product::findOrFail($id);
        $new -> user_id = Auth::user()->id;
        $new -> category_id  = $req -> category;
        $new -> name = $req -> name;
        $new -> price = $req -> price;
        $new -> save();

        
        return redirect('/product',)->with('message', 'Edit Product Success!!!');
    }

    public function delete($id){

        $data = Product::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('message', 'Delete Product Success!!!');
        
    }

    
}
