<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'content',
        'user_id',
        'commentable_type',
        'commentable_id',
    ];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }
}
