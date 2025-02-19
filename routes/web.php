<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiswaController_2;


Route::get('/', function () {
    return view('welcome');
});

// // 127.0.0.1:8000/siswa/1 dan menampilkan 
// //teks "SAYA SISWA" heading 1
// Route::get('/siswa', function () {
//     return "<h1>SAYA SISWA</h1>";
// });

// // 127.0.0.1:8000/siswa/1 dan menampilkan 
// // teks "SAYA SISWA ID 1 DENGAN NAMA andri" heading 1
// Route::get('/siswa/{id}/{nama}', function ($id,$nama) {
//     return "<h1>SAYA SISWA ID $id DENGAN NAMA $nama</h1>";
// })->where(['id'=>'[0-9]+','nama'=>'[A-Za-z]+']);

// //127.0.0.1:8000/siswa/1 dan menampilkan 
// //teks "SAYA SISWA ID 1" heading 1
// Route::get('/siswa/{id}/{nama}', function ($id,$nama) {
//     return "<h1>SAYA SISWA ID $id DENGAN NAMA $nama</h1>";
// })->where('id','[0-9]+'); 
// // untuk  menetapkan aturan parameter id di URL


// //controller siswa
// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('siswa/{id}', [SiswaController::class, 'detail'])->where('id','[0-9]+');
Route::resource('siswa',SiswaController::class)->Middleware('isLogin');



// //controller guru
// Route::get('guru', [GuruController::class, 'index']);
// Route::get('guru/{id}/{nama}', [GuruController::class, 'detail'])->where('id', '[0-9]+');

// //routes guru
// Route::get('/guru/{id}/{nama}', function ($id,$nama) {
//          return "<h1>SAYA GURU ID $id DENGAN NAMA $nama</h1>";
//      })->where('id','[0-9]+');

//route halamancontroller
Route::get('/',function(){
    return view('sesi/welcome');
})->Middleware('isAktif');
Route::get('/tentang', [HalamanController::class,'tentang']);
Route::get('/kontak', [HalamanController::class,'kontak']);

//route sesi
Route::get('sesi',[SessionController::class,'index'])->Middleware('isAktif');
Route::post('/sesi/login',[SessionController::class,'login'])->Middleware('isAktif');
Route::get('/sesi/logout',[SessionController::class,'logout']);
Route::get('/sesi/register',[SessionController::class,'register'])->Middleware('isAktif');
Route::post('/sesi/create',[SessionController::class,'create']);

//route kelas
// Route::get('kelas', [KelasController::class, 'index']);
// Route::get('kelas/{id}', [KelasController::class, 'detail'])->where('id','[0-9]+');
Route::resource('kelas',KelasController::class)->Middleware('isLogin');
Route::get('siswa', [SiswaController_2::class, 'index']);
