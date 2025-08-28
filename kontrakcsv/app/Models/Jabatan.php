<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    //soft delete
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    //soft delete
    protected $table = 'table_jabatan';
    protected $fillable = ['kode_jabatan', 'nama_jabatan'];
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = true;
}
