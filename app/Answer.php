<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
    'option'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function users(){
        return $this->belongsToMany(Answer::class);
    }

}
