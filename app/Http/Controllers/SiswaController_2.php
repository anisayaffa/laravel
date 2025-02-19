<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController_2 extends Controller
{
    //
    function index()
    {
       $siswa = Siswa::latest()->get();

       return view('siswa.siswa', compact('siswa'));
    }
}
