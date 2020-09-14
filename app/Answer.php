<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //pour l'insertion des données
    protected $fillable = [
        'option'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

}
