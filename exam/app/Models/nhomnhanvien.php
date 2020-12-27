<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhomnhanvien extends Model
{
    use HasFactory;
    protected $table='nhomnhanvien';
    function nhanvien(){
        return $this->hasMany(nhanvien::class,'nhomnhanvien_id','id');
    }
}
