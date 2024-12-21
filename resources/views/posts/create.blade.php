@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @include('posts.form')
        <button type="submit" class="btn btn-success">Create Post</button>
    </form>
@endsection
