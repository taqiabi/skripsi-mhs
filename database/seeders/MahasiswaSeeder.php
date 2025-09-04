<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Mahasiswa::create([
            'nim' => '123456',
            'nama' => 'Abiyyu',
            'kode_fakultas' => '01',
            'id_program_studi' => 1,
            'program_studi' => 'Teknik Informatika',
        ]);
        Mahasiswa::create([
            'nim' => '654321',
            'nama' => 'Taqi',
            'kode_fakultas' => '02',
            'id_program_studi' => 2,
            'program_studi' => 'Sistem Informasi',
        ]);
    }
}
