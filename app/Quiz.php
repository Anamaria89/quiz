<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class Quiz extends Model
{
    protected $table = 'quizzes';

    public function questions(){
        return $this->hasMany('App\Question');
    }

}
