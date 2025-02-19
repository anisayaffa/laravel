<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            'nama'=>'Andi',
            'nis'=>'101',
            'alamat'=>'Kota Malang',
            'kelas_id'=>'1'
        ]);
        DB::table('siswa')->insert([
            'nama'=>'Budi',
            'nis'=>'102',
            'alamat'=>'Kab Malang',
            'kelas_id'=>'2'
        ]);
        DB::table('siswa')->insert([
            'nama'=>'Candra',
            'nis'=>'103',
            'alamat'=>'Kota Batu',
            'kelas_id'=>'3'
        ]);
    }

}
