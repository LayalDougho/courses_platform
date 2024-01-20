<?php

namespace App\Models;

use App\Models\Level;
use App\Models\Comment;
use App\Models\Program;
use App\Models\Category;
use App\Models\Instructor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'image',
        'duration',
        'new_cost',
        'old_cost',
        'category_id',
        'instructor_id',
        'program_id',
        'level_id',
        'student_number	',
        'lessons_number',
        'quizes_number',
    ];


    public function instructor(){
        $this->belongsTo(Instructor::class);
    }

    public function category(){
        $this->belongsTo(Category::class);
    }

    public function program(){
        $this->belongsTo(Program::class);
    }

    public function level(){
        $this->belongsTo(Level::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
