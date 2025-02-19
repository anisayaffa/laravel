@extends('layout/index')
@section('konten')
    <div>
        <a href='/kelas' class='btn btn-secondary'><< KEMBALI</a>
        <h1>{{$data->nama_kelas}}</h1>
        <p>
            <b>Walikelas: </b>{{$data->walikelas}}
        </p>
        <p>
            <b>Jumlah Siswa: </b>{{$data->jumlah_siswa}}
        </p>
        <p>
            <b>Foto: </b>
            <img src="{{ file_exists(public_path('foto/' . $data->foto)) && $data->foto ? url('foto') . '/' . $data->foto : url('foto/no-photo.png') }}" style="max-width: 50px; max-height:50px">
        </p>
    </div>
@endsection