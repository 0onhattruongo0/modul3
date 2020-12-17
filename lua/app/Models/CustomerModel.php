<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    protected $table='customer';
    function roles(){
          return $this->belongsToMany(RolesModel::class,'role__customer','customer_id','role_id');
    }
}
