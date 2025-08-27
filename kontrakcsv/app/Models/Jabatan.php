<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'table_jabatan';
    protected $fillable = ['kode_jabatan', 'nama_jabatan'];
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = true;
    
}
