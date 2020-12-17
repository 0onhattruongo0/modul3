<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfNews extends Model
{
    use HasFactory;
    protected $table='type_of_news';
    function Category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    function News(){
        return $this->hasMany(News::class,'typeofnews_id','id');
    }
}
