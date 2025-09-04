<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //
    protected $table = 'dosens';
    protected $fillable = [
        'nama',
        'nuptk',
    ];

    public function aktivitasPembimbing1(){
        return $this->hasMany(Aktivitas::class, 'pembimbing1', 'id');
    }
    public function aktivitasPembimbing2(){
        return $this->hasMany(Aktivitas::class, 'pembimbing2', 'id');
    }
    public function aktivitasPenguji1(){
        return $this->hasMany(Aktivitas::class, 'penguji1', 'id');
    }
    public function aktivitasPenguji2(){
        return $this->hasMany(Aktivitas::class, 'penguji2', 'id');
    }
    public function aktivitasPenguji3(){
        return $this->hasMany(Aktivitas::class, 'penguji3', 'id');
    }
}
