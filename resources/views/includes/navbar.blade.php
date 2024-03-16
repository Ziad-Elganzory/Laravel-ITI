<div class="navbar">
    <ul>
        <li class="{{ Route::currentRouteName() === 'posts.index' ? 'active' : '' }}"><a href="{{ route('posts.index')}}">Home</a></li>
        <li class="{{ Route::currentRouteName() === 'posts.create' ? 'active' : '' }}"><a href="{{ route('posts.create')}}">New Post</a></li>
        <li class="{{ Route::currentRouteName() === 'posts.deleted' ? 'active' : '' }}"><a href="{{ route('posts.deleted')}}">Deleted Posts</a></li>
    </ul>
</div>
