<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //une question peut avoir plusieurs réponse
    public function answer()
    {
        return $this->belongsToMany(Answer::class);
    }
}
