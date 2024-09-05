<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller
{
    public function index(){
        
        $nilaiHarian = null;    
        $nilaiUTS = null;    
        $nilaiRata = null;    
        $hasilNilai = null;
        return view('welcome',
         compact(
            'nilaiHarian',
            'nilaiUTS',
            'nilaiRata',
            'hasilNilai',
            )
        );
    }

    public function hitung(Request $req){

        $nilaiHarian = $req->nilaiHarian;
        $nilaiUTS = $req->nilaiUTS;

        $nilaiRata = ($nilaiHarian+$nilaiUTS) / 2;

        if ($nilaiRata < 60) {
            $hasilNilai = "Maaf Anda Tidak Lulus";
        }else if ($nilaiRata >= 60 && $nilaiRata <= 75){
            $hasilNilai = "Predikat Nilai C";
        }else if ($nilaiRata >= 76 && $nilaiRata <= 87){
            $hasilNilai = "Predikat Nilai B";
        }else if ($nilaiRata >= 88 && $nilaiRata <= 100){
            $hasilNilai = "Predikat Nilai A";
        } else{
            $hasilNilai = "Maaf Terjadi Kesalahan Dalam Proses Input Nilai";
        }

        return view('welcome',
         compact(
            'nilaiHarian',
            'nilaiUTS',
            'nilaiRata',
            'hasilNilai',
            )
        );

    }
}
