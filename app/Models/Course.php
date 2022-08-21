<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table ='courses';

    protected $fillable = [
        'finish_years',
        'course',
        'lembaga',
        'link_sertifikat',
        'kategory_course',
    ];

    public function category()
    {
        return $this->hasMany(CourseKategory::class);
    }
}
