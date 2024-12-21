@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
    <hr>
    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->body }}</p>
            <p>Likes: {{ $post->likes }}</p>
            <form action="{{ route('posts.like', $post) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-success">Like</button>
            </form>
            <a href="{{ route('posts.show', $post) }}" class="btn btn-info">View</a>
            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        <hr>
    @endforeach
@endsection
