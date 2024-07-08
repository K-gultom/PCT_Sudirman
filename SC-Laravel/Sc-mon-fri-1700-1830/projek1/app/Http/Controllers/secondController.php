<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class secondController extends Controller
{
    public function second_screen(){

        return view('second-screen');
    }

    public function third_screen(){

        return view('third-screen');
    }

    public function fourth_screen(){

        return view('fourth-screen');
    }

}
