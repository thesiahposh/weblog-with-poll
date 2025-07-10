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
}
