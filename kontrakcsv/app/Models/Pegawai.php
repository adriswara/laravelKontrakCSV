<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'table_pegawai';
    protected $fillable = ['nama_pegawai', 'kode_jabatan', 'kode_cabang', 'tanggal_mulai_kontrak', 'tanggal_akhir_kontrak'];
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = true;
}
