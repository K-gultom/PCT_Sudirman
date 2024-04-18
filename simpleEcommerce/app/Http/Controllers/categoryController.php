<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        
        $data = Category::all();
        return view('Category.category', compact('data'));

    }

    public function add(){

        return view('Category.addCategory');

    }

    public function addProses(Request $r){

        $r->validate([
            "name" => 'required|min:3|max:50',
        ]);

        $new = new Category();
        $new -> name = $r -> name;
        $new -> save();

        return redirect('/category')->with('message', 'Add Category Success!!!');

    }

    public function edit(){

        return view('Category.editCategory');
        
    }

    public function delete($id){
        
        $data = Category::findOrFail($id); //untuk mencari data sesuai $id yang dicari
        $data -> delete(); //function untuk hapus data
        return back()->with('message', 'Delete data success!!!');

    }

}
