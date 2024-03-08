<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'creator_id'
    ];

    public function quizzes() 
    {
        return $this->hasMany(Quiz::class);
    }

    public function creator(){
        return $this->belongsTo(User::class);
    }
}
