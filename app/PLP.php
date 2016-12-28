<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PLP extends Model
{
    protected $fillable=['nip','nama_plp','judul_laporan','judul_ki','tahun'];
    protected $table='plp';
    public $incrementing=False;
    protected $primaryKey='id';
}
