<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cabang extends Model
{
    //soft delete
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    //soft delete
    protected $table = 'table_cabang';
    protected $fillable = ['kode_cabang', 'nama_cabang'];
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = true;
}
