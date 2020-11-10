<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts'; //多餘，可略
//    protected $fillable=[
//        'title',
//        'content',
//        'is_feature'
//    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }


}
