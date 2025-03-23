<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function index(Request $request)
    {
        $polls = $request->user()->polls;
        return view('admin.polls',compact('polls'));
    }

    public function store(Request $request)
    {
       $request->validate([
        'title' => ['required','max:150','min:10'],
        'type_id' => ['required','exists:types,id'],
        'expired_at' => ['required'],
        'a.0.answers' => ['required'],
        'a.1.answers' => ['required'],       
       ]);

       $j_expired_at = explode('/',$request->expired_at);
       $year=$j_expired_at[0];
       $month=$j_expired_at[1];
       $day=$j_expired_at[2];

       $expired_at = implode('-', \Morilog\Jalali\CalendarUtils::toGregorian($year, $month, $day));

       $poll = $request->user()->polls()->create([
        'title' => $request->title,
        'type_id' => $request->type_id,
        'expired_at' => $expired_at,
        'published' => false,
       ]);

       foreach($request->a as $q)
       {
            $poll->questions()->create([
                'user_id' => $request->user()->id,
                'q_body' => $q['answers'],
            ]);
       }
       
       return redirect('/admin/polls');
    }
}
