<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Team;
use App\Http\Requests\CreateCommentRequest;


class CommentsController extends Controller
{
    public function store(CreateCommentRequest $request, $id)
    {

        Team::find($id)->addComment($request->validated()['content'], auth()->id());
        // Comment::create([
        //     'content' => request('content'),
        //     'team_id' => $id,
        //     'user_id' => $id

        // ]);
        return redirect()->back();
    }
}