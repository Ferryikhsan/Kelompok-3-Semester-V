<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //use Notifiable;
    protected $fillable= [
        'nip','nama_dosen','judul_laporan','judul_ki','tahun'
    ];
}
