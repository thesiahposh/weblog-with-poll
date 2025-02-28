<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;

Route::view('/','admin.main');
Route::view('polls/create','admin.polls.create');
Route::get('polls',[PollController::class,'index']);