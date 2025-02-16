<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return abort(404);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Comment::create([
            'text' => $request->text,
            'user_id' => Auth::user()->id,
            'post_id' => $request->post_id,
        ]);
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment=Comment::find($id);
        return view('blog.editcomment',compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($comment=comment::find($id))
        {
            $comment->update([
                'text' => $request->text,
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
        return redirect(route('blog.blog.show',['blog'=>$comment->post->id]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($comment=comment::find($id))
        {
            $comment->delete();
        }
        return redirect(route('blog.blog.show',['blog'=>$comment->post->id]));
    }
}
