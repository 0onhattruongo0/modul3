<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupStaff extends Model
{
    use HasFactory;
    protected $table='group_staff';
    function staff(){
        return $this->hasMany(staff::class,'GroupStaff_id','id');
    }
}
