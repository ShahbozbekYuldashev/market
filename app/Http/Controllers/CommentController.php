<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comments = Comment::create([
            'body' => $request->body,
            'post_id' => $request->post_id,
            'user_id' => 2,
        ]);

        return redirect()->back();
    }
}
