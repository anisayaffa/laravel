@extends('layout/index')
@section('konten')
    <a href='/kelas' class='btn btn-secondary'><< KEMBALI</a>
            <form method="POST" action="{{ '/kelas/'.$data->id }}" enctype="multipart/form-data">
                @csrf 
                @method('put')
                <div class="mb-3">
                    <h1>Nomor ID Kelas: {{ $data->id }}</h1>
                </div>
                <div class="mb-3">
                    <label for="nama_kelas" class="form-label">Nama Kelas</label>
                    <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" value="{{ $data->nama_kelas }}">
                </div>
                <div class="mb-3">
                    <label for="walikelas" class="form-label">Nama Wali Kelas</label>
                    <input type="text" class="form-control" name="walikelas" id="walikelas" value="{{ $data->walikelas }}">
                </div>
                <div class="mb-3">
                    <label for="jumlah_siswa" class="form-label">Jumlah Siswa</label>
                    <input type="text" class="form-control" name="jumlah_siswa" id="jumlah_siswa" value="{{ $data->jumlah_siswa }}">
                </div>
                <div class="mb-3">
                    <img src="{{ file_exists(public_path('foto/' . $data->foto)) && $data->foto ? url('foto') . '/' . $data->foto : url('foto/no-photo.png') }}" style="max-width: 50px; max-height:50px">
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" name="foto" id="foto">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </form>             
@endsection