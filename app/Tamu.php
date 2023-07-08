<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = "tb_bukutamu";

    protected $primaryKey = 'id_tamu';

    protected $fillable = ['nim_tamu', 'nama_tamu', 'instansi', 'jurusan_tamu', 'tanggal_kunjung'];
}
