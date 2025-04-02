<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Poll;

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

    public function destroy(Poll $poll)
    {

        if($poll->questions && $poll->questions->count())
        {
            $poll->questions()->delete();
        }
        $poll->delete();
        return back();
        
    }

    public function edit(Poll $poll)
    {
        $expired_at_array = explode(' ', $poll->expired_at);
        $expired_at_date_array = explode('-', $expired_at_array[0]);
        $expired_at = implode('/', \Morilog\Jalali\CalendarUtils::toJalali(
            $expired_at_date_array[0],
            $expired_at_date_array[1],
            $expired_at_date_array[2]));

        return view('admin.polls.edit',compact('poll','expired_at'));
    }

    public function update(Request $request, Poll $poll)
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
    
           $poll->update([
            'title' => $request->title,
            'type_id' => $request->type_id,
            'expired_at' => $expired_at,
            'published' => false,
           ]);

           $poll->questions()->delete();
    
           foreach($request->a as $q)
           {
            if($q['answers'])
            {
                $poll->questions()->create([
                    'user_id' => $request->user()->id,
                    'q_body' => $q['answers'],
                ]);
            }
           }

           return redirect('/admin/polls'); 
    }

    public function publish(Request $request, Poll $poll)
    {
        if(!$poll->published)
        {
            $poll->update([
                'published' => true,
            ]);
        }
        
        if(!$poll->shortLink)
        {
            $poll->shortLink()->create([
                'code' => \Illuminate\Support\Str::random(3) . mt_rand(10,99) .
                $request->user()->id . Str::random(3),               
                'link' => "/poll/show/{$poll->id}",
            ]);
        }

        return back();
    }
}
