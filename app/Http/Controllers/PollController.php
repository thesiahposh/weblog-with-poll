<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Morilog\Jalali\Jalalian;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function show(Poll $poll)
    {
        if(!$poll->published)
        {
            throw new \Exception('این نظر سنجی منتشر نشده است.');
        }
        if(Jalalian::now()->getTimestamp() > Jalalian::fromDateTime($poll->expired_at)->getTimestamp())
        {
            throw new \Exception('این نظرسنجی منقضی شده است.');
        }

        return view('polls.show',compact('poll'));
    }
}
