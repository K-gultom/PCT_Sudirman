<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        
        return view('Category.category');
    }

    public function add(){
        return view('Category.addCategory');
    }

    public function edit(){
        return view('Category.editCategory');
    }

    public function delete(){
        
    }
}
