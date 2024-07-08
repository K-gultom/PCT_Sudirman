<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logicController extends Controller
{

    public function index(){

        $nama = "Yehezkiel Gultom";  // tipe string
        $usia = 27; //tipe integer
        $nilai_Double = 0.12; //tipe data float / double
        $huruf_Pertama = 'A';

        echo "Nama : " . $nama . "<br>";
        echo "Usia : " . $usia . "<br>";
        echo "Nilai Douuble : " . $nilai_Double . "<br>";
        echo "Huruf Pertama Nama : " . $huruf_Pertama . "<br>";

    }

    
}
