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
    return $this->belongsTo(question::class);
    }

}
