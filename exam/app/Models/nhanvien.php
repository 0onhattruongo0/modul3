<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    use HasFactory;
    protected $table='nhanvien';
    function nhomnhanvien(){
        return $this->belongsTo(nhomnhanvien::class,'nhomnhanvien_id','id');
    }
}
