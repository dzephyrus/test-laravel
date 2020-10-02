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
        'fakeStudent_class'
    ];
}

