<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'student_id',	
        'name',
        'age',
        'image_id',
        'done',
        
    ];

    public function images(){
        return $this->hasOne(Image::class, 'id', 'image_id');
    }

}
