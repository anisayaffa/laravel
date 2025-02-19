<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //tentukan nama tabel yg akan digunakan
    protected $table='siswa'; //nama tabel yg sesuai dengan model
    protected $fillable = ['nis', 'nama', 'alamat',];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
