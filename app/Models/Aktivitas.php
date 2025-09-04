<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    //
    protected $table = 'aktivitas';
    protected $dates = ['tanggal_sk', 'tanggal_mulai', 'tanggal_akhir'];
    protected $fillable = [
        'judul',
        'no_sk',
        'tanggal_sk',
        // 'jenis_aktivitas',
        // 'jenis_anggota',
        'tanggal_mulai',
        'tanggal_akhir',
        'semester',
        // 'lokasi',
        'keterangan',
        'mahasiswa',
        'pembimbing1',
        'pembimbing2',
        'penguji1',
        'penguji2',
        'penguji3'
    ];
    function mahasiswaRel()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa', 'id');
    }

    function pembimbing1Rel()
    {
        return $this->belongsTo(Dosen::class, 'pembimbing1', 'id');
    }
    function pembimbing2Rel()
    {
        return $this->belongsTo(Dosen::class, 'pembimbing2', 'id');
    }
    function penguji1Rel()
    {
        return $this->belongsTo(Dosen::class, 'penguji1', 'id');
    }
    function penguji2Rel()
    {
        return $this->belongsTo(Dosen::class, 'penguji2', 'id');
    }
    function penguji3Rel()
    {
        return $this->belongsTo(Dosen::class, 'penguji3', 'id');
    }
}
