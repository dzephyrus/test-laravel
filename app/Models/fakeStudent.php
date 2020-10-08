<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakeStudent extends Model
{
    use HasFactory;

    protected $table = 'fakeStudent';

    protected $fillable = [
        'fakeStudent_name',
        'fakeStudent_class',
        'gender',
        'age'
    ];

    //function comment the hien moi quan he 1 post se co nhieu comment
    public function comments(){
        return $this -> hasMany(Comment::class, 'post_id', 'id');
    }
}

