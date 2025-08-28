<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //soft delete
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    //soft delete
    protected $table = 'table_pegawai';
    protected $fillable = ['nama_pegawai', 'kode_jabatan', 'kode_cabang', 'tanggal_mulai_kontrak', 'tanggal_akhir_kontrak'];
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = true;
}
