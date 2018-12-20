<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_question extends Model
{
    protected $fillable = [
        'question_content',
    ];
    public function answer()
    {
        return $this->hasMany('App\Tbl_answer');
    }
}
