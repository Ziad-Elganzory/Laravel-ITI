@extends('layout.main')

@section('title','Create Post')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="body">Body:</label><br>
        <textarea id="body" name="body"></textarea><br>
        <button type="submit">Create</button>
    </form>
@endsection
