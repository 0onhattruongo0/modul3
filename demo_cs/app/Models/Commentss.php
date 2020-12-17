<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentss extends Model
{
    use HasFactory;
    protected $table='commentss';
    function News(){
        return $this->belongsTo(News::class,'news_id','id');
    }
    function User(){
        return $this->belongsTo(User::class,'users_id','id');
    }
}
