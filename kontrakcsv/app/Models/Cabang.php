<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected $table = 'table_cabang';
    protected $fillable = ['kode_cabang', 'nama_cabang'];
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = true;
}
