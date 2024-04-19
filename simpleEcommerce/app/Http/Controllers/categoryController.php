<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categoryController extends Controller
{
    public function index(){
        
        $iduser = Auth::user()->id;
        $data = Category::where('user_id', $iduser)->get();
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
        $new -> user_id = Auth::user()->id;
        $new -> save();

        return redirect('/category')->with('message', 'Add Category Success!!!');

    }

    public function edit($id){

        $data = Category::findOrFail($id);
        return view('Category.editCategory', compact('data'));
        
    }

    public function editProses(Request $r, $id){

        $r->validate([
            "name" => 'required|min:3|max:50',
        ]);

        $new = Category::findOrFail($id);
        $new -> name = $r -> name;
        $new -> save();

        return redirect('/category')->with('message', 'Update Data Success!');
    }

    public function delete($id){
        
        $data = Category::findOrFail($id); //untuk mencari data sesuai $id yang dicari
        $data -> delete(); //function untuk hapus data
        return back()->with('message', 'Delete data success!!!');

    }

}
