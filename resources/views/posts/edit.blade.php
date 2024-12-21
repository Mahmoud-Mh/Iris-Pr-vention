@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @method('PUT')
        @include('posts.form')
        <button type="submit" class="btn btn-success">Update Post</button>
    </form>
@endsection
