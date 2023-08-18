<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edit extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',	
        'name',
        'age',
        'image_id',
        'done',
        

    ];
}
