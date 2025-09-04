<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Dosen::create([
            'nama' => 'Dosen 1',
            'nuptk' => '1234567890',
        ]);
        Dosen::create([
            'nama' => 'Dosen 2',
            'nuptk' => '0987654321',
        ]);
    }
}
