<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Team;
use App\Http\Requests\CreateCommentRequest;
use App\Mail\CommentReceived;
use Illuminate\Support\Facades\Mail;



class CommentsController extends Controller
{
    public function store(CreateCommentRequest $request, $id)
    {
        $team = Team::findOrFail($id);
        $team->addComment($request->validated()['content'], auth()->id());

        if ($team) {
            Mail::to($team)->send(new CommentReceived($team));
        }
        // Comment::create([
        //     'content' => request('content'),
        //     'team_id' => $id,
        //     'user_id' => $id

        // ]);
        return redirect()->back();
    }
}