<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted Posts</title>
</head>
<body>
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
                    <form action="#" method="POST">
                        <button type="submit">Restore</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
