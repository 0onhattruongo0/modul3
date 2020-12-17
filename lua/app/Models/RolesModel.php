<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesModel extends Model
{
    use HasFactory;
    protected $table='roles';
    function customers(){
        return $this->belongsToMany(CustomerModel::class,'role__customer','role_id','customer_id');
    }
}
