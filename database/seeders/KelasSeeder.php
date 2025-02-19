<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            'id'=>'1',
            'nama_kelas'=>'XI RPL 1',
            'walikelas'=>'Ibu Nur',
            'jumlah_siswa'=>'30',
        ]);
        DB::table('kelas')->insert([
            'id'=>'2',
            'nama_kelas'=>'XI RPL 2',
            'walikelas'=>'Ibu Winda',
            'jumlah_siswa'=>'32',
        ]);
        DB::table('kelas')->insert([
            'id'=>'3',
            'nama_kelas'=>'XII RPL 2',
            'walikelas'=>'Ibu Erinta',
            'jumlah_siswa'=>'28',
        ]);
       
    }
}
