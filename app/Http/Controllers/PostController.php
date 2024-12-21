<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all(); // Retrieve all posts
        return view('posts.index', compact('posts')); // Pass posts to the index view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create'); // Render the form for creating a new post
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        Post::create($validatedData); // Save the validated data as a new post
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post')); // Pass the post to the show view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post')); // Pass the post to the edit view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post->update($validatedData); // Update the post with the validated data
        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete(); // Delete the specified post
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }


    public function like(Post $post)
{
    $post->like();
    return redirect()->route('posts.index')->with('success', 'Post liked successfully!');
}

}
