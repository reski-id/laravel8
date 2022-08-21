<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseKategory extends Model
{
    use HasFactory;

    protected $table ='courses_kategory';

    protected $fillable = [
        'kategory',
    ];

    public function course()
    {
        return $this->belongsTo(Course ::class);
    }
}
