<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Student extends Model
{
    protected $collection = 'students';

    protected $fillable = [
        'name',
    ];
}