<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable=[
        'subject',
        'description',
        'creator_id',
        'is_public',
        'start_at',
        'end_at',
        'is_negative_mark',
        'negative_mark',
        'time_limit'
    ];

    protected $casts=[
        'start_at'=>'datetime',
        'end_at'=>'datetime'
    ];

    public function creator(){
        return $this->belongsTo(User::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }

}
