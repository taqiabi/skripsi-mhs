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
        $dosens = [
            ['nama' => 'Dosen 1', 'nuptk' => '1234567890'],
            ['nama' => 'Dosen 2', 'nuptk' => '2345678901'],
            ['nama' => 'Dosen 3', 'nuptk' => '3456789012'],
            ['nama' => 'Dosen 4', 'nuptk' => '4567890123'],
            ['nama' => 'Dosen 5', 'nuptk' => '5678901234'],
            ['nama' => 'Dosen 6', 'nuptk' => '7788990011'],
            ['nama' => 'Dosen 7', 'nuptk' => '8899001122'],
            ['nama' => 'Dosen 8', 'nuptk' => '9900112233'],
            ['nama' => 'Dosen 9', 'nuptk' => '0011223344'],
            ['nama' => 'Dosen 10', 'nuptk' => '1122334455'],
        ];

        Dosen::insert($dosens);
    }
}
