@extends('layout.main')

@section('Edit Post')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="{{ $post->title }}"><br>
        <label for="body">Body:</label><br>
        <textarea id="body" name="body">{{ $post->body }}</textarea><br>
        <button type="submit">Update</button>
    </form>
@endsection
