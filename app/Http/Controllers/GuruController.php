<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;

class GuruController extends Controller
{
    //
    function index()
    {
        //return '<h1>SAYA GURU dari controller</h1>';
        $data=kelas::orderBy('id','desc')->paginate(1);
        return view('kelas/index')->with('data',$data);
    }
    function detail($id) {
        //return "<h1>SAYA GURU dari controller ID $id DENGAN NAMA $nama</h1>";
        $data=kelas::where('id',$id)->first();
        return view('kelas/detail')->with('data',$data);
    }
}
