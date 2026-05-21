<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ijazah extends Model
{
    protected $fillable = [
        'nomor_seri',
        'nama_mahasiswa',
        'npm',
        'program_studi',
        'fakultas',
        'gelar',
        'tanggal_lulus',
        'nama_universitas',
        'tempat_terbit',
        'tanggal_terbit',
        'nama_dekan',
        'nip_dekan',
        'nama_rektor',
        'nip_rektor',
    ];
}
