<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    //tentukan nama tabel yg akan digunakan
    protected $table='kelas'; //nama tabel yg sesuai dengan model
    protected $fillable = ['nama_kelas', 'walikelas', 'jumlah_siswa', 'foto'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

}
