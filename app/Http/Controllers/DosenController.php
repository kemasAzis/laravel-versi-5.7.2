<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index($nama)
    {
        // $nama = "Kemas azis";
        $mata_kuliah = ["Pemrograman Framework","Pemrograman Web", "Basis Data"];
        
        return view('biodata', 
        [
            'nama' => $nama,
            'Nim' => 'TI21240009',
            'mata_kuliah' => $mata_kuliah
        ]);
    }
}
