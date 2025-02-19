<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    //
    function index()
    {
        //return '<h1>SAYA SISWA dari controller</h1>';
        $data=siswa::orderBy('nis','desc')->paginate(1);
        return view('siswa/index')->with('data',$data);
    }
    function detail($id) {
        //return "<h1>SAYA SISWA dari controller dengan ID $id</h1>";
        $data=siswa::where('nis',$id)->first();
        return view('siswa/detail')->with('data',$data);
    }
}
