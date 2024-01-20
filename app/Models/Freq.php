<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Freq extends Model
{
    use HasFactory;

    protected $fillable=[
        'question',
        'answer',
        'course_id',
    ];

    public function course(){
        $this->belongsTo(Course::class);
    }
}
