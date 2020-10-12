<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'fakeStudent_name',
        'fakeStudent_class',
        'gender',
        'age'
    ];

    //function comment the hien moi quan he 1 post se co nhieu comment
    public function posts(){
        return $this -> hasMany(Post::class, 'student_id', 'id');
        //return $this -> belongsToMany(Post::class, 'category_post', 'category_id', 'post_id);
    }
}
