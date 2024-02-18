<?php

namespace App\Models;

use App\Models\Curriclum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'curriclum_id',
    ];

    public function curriclum(){
        $this->belongsTo(Curriclum::class);
    }
}
