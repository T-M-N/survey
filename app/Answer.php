<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
 
    public function question()
    {
        return $this->hasMany(question::class);
    }

     public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
