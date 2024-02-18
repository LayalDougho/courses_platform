<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'description',
    ];

    public function user(){
        $this->belongsTo(User::class);
    }
}
