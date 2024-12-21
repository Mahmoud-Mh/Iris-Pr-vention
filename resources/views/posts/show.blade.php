@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <p>Likes: {{ $post->likes }}</p>
    <form action="{{ route('posts.like', $post) }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" class="btn btn-success">Like</button>
    </form>
    <hr>
    <h3>Comments</h3>
    <ul>
        @foreach ($post->comments as $comment)
            <li>{{ $comment->body }}</li>
        @endforeach
    </ul>
    <hr>
    <h3>Add a Comment</h3>
    <form action="{{ route('posts.comments.store', $post) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="body">Comment</label>
            <textarea name="body" id="body" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Comment</button>
    </form>
@endsection
