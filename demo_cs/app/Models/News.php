<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table='news';
    function TypeOfNews(){
        return $this->belongsTo(TypeOfNews::class,'typeofnews_id','id');
    }
    function Commentss(){
        return $this->hasMany(Commentss::class,'news_id','id');
    }
}
