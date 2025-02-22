<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;
    /*
    type_id -> to define wheter our polls can have one or multiple answers.
    published -> has our poll been published?
    expired_at -> expiration date of poll.
    */
    protected $fillable=['user_id', 'type_id', 'title', 'published','expired_at'];
}
