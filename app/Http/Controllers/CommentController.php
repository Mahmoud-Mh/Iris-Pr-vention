<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        // Validate the request
        $validatedData = $request->validate([
            'body' => 'required|string',
        ]);

        // Create a new comment associated with the post
        $post->comments()->create($validatedData);

        // Redirect back to the post's page with a success message
        return redirect()->route('posts.show', $post)->with('success', 'Comment added successfully!');
    }
}
