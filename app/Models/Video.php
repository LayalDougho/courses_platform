<?php

namespace App\Models;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $fillable =[
        'lesson_id',
        'status',
        'duration',
        'link',
    ];

    public function lesson(){
        $this->belongsTo(Lesson::class);
    }
}
