<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model
{
    protected $fillable = ['poll_id','code','link'];

    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }
    
}
