<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table='staff';
    function GroupStaff(){
        return $this->belongsTo(GroupStaff::class,'GroupStaff_id','id');
    }
}
