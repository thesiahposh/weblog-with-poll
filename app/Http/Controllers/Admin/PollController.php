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
}
