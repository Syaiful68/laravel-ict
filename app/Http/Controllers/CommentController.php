<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class CommentController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'ticket' => 'required',
            'comment' => 'required'
        ]);

        Comment::create([
            'ticket_id' => $request->ticket,
            'comment' => $request->comment,
            'user_id' => 1
        ]);
    }

    public function destroy(String_ $id)
    {
        $query = Comment::query()->where('id', $id)->first();
        $query->delete();
    }
}
