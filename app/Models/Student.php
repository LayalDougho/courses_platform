<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'course_id',
    ];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function course(){
        $this->belongsTo(Course::class);
    }
}
