<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
    protected $table='post';
    function categories(){
        return $this->belongsTo(CategoriesModel::class,'categories_id','id');
    }
}
