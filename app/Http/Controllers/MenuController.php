<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view ('beranda');
    }

    public function data_siswa()
    {
        return view('siswa');//siswa ini nama blade nya
    }

    public function info()
    {
        return view ('info');
    }
}
