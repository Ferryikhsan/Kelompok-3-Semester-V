<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable=['nim','nama','prodi','judul_laporan','judul_ki','tahun'];
    protected $table='mahasiswa';
    public $incrementing=False;
    protected $primaryKey='id';
}
