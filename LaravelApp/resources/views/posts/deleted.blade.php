@extends('layout.main')

@section('title','Deleted Posts')

@section('content')
    <h1>Deleted Posts</h1>
    <table border="1">
        <thead>
            <tr>
            <th>ID</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deletedPosts as $post)
            <tr>
            <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at}}</td>
                <td>{{ $post->updated_at}}</td>
                <td>
                    <form action="{{ route('posts.restore', $post->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit">Restore</button>
                    </form>
                    <form action="{{ route('posts.forceDelete', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Permanently Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
