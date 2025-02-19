<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent: relasi one to many</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center"><a href="#"></a></h3>
                <h5 class="text-center my-4">Laravel Eloquent relations : One To Many</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                       <tr>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Wali Kelas</th>
                            <th>Jumlah Siswa</th>
                       </tr>
                    </thead>
                    <tbody>
                        @foreach($siswa as $siswa)
                        <tr>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->kelas->nama_kelas }}</td>
                            <td>{{ $siswa->kelas->walikelas }}</td>
                            <td>{{ $siswa->kelas->jumlah_siswa }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
