<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
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
