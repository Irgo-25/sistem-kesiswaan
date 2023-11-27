<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{

    use HasFactory;

    protected $table = 'siswa';
    protected $primary = 'NIS';

    protected $fillable = [
        'NIS',
        'nama_siswa',
        'tempat_lahir',
        'tanggal_lahir',
        'umur',
    ];
}
