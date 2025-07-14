<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;
use App\Models\Answer;

class AnswerController extends Controller
{
    public function answer(Request $request)
    {
        foreach($request->q as $question)
        {
             Answer::create([
                'poll_id' => $request->poll_id ,
                'question_id' => $question,
       ]);
        }
        return back();
    }

    public function showResult(Poll $poll)
    {
        $count = $poll->answers()->count();
        $grouped = collect($poll->answers()->with('question')->get())->groupBy('question_id');
        $array = collect();
        collect($grouped->all())->map(function($allAnswers) use ($array)
        {
            foreach($allAnswers as $answer)
            {
                $array->push($answer->question->id);
            }
        });

        $result = array_count_values($array->toArray());
        return view('admin.polls.results',compact('result','poll','count'));

    }
}
