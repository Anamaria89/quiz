<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }

    public function answerQuestion(){
        return $this->hasOne('App\Answer');
    }
}
