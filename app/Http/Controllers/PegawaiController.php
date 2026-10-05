<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //
    public function formulir()
    {
        // return view('pegawai', ['nama' => $nama]);
        // return $nama;

        return view('formulir');
        }
}
