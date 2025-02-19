@extends('layout/index')
@section('konten')
   <form method="POST" action="/kelas" enctype="multipart/form-data">
    @csrf
       <div class="mb-3">
           <label for="nama_kelas" class="form-label">Nama Kelas</label>
           <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" value="{{ Session::get('nama_kelas')}}">
       </div>
       <div class="mb-3">
           <label for="walikelas" class="form-label">Walikelas</label>
           <input type="text" class="form-control" name="walikelas" id="walikelas" value="{{ Session::get('walikelas')}}">
           <!-- <textarea class="form-control" name="walikelas" id="walikelas">{{ Session::get('walikelas')}}</textarea> -->
       </div>
       <div class="mb-3">
           <label for="jumlah_siswa" class="form-label">Jumlah Siswa</label>
           <input type="text" class="form-control" name="jumlah_siswa" id="jumlah_siswa" value="{{ Session::get('jumlah_siswa')}}">
       </div>
       <div class="mb-3">
           <label for="foto" class="form-label">Foto</label>
           <input type="file" class="form-control" name="foto" id="foto">
       </div>
       <div class="mb-3">
           <button type="submit" class="btn btn-primary">SIMPAN</button>
       </div>
   </form>
@endsection