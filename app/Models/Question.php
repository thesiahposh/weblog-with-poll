<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //question body
    protected $fillable=['user_id','poll_id','q_body'];

    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }
}
