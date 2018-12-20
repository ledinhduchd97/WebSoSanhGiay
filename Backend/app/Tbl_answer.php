<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_answer extends Model
{
    protected $fillable = [
        'answer_content',
        'answer_id_question'
    ];
    public function question()
    {
        return $this->belongsTo('App\Tbl_question','answer_id_question');
    }

}
