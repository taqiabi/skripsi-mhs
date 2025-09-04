<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nim',
        'nama',
        'kode_fakultas',
        'id_program_studi',
        'program_studi',
    ];

    // public function aktivitas(){
    //     return $this->hasOne(Aktivitas::class, 'mahasiswa', 'id');
    // }
}
