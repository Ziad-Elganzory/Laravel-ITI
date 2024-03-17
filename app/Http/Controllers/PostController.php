<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest as StorePost;
use App\Http\Requests\UpdatePostRequest as EditPost;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function user_show()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePost $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();
    
        Post::create($data);
    
        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(EditPost $request, Post $post)
    {
        $data = $request->validated();
        $post->update($data);
    
        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }

    public function deleted()
    {
        $deletedPosts = Post::onlyTrashed()->get();
        return view('posts.deleted', compact('deletedPosts'));
    }

    public function restore($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();

        return redirect()->route('posts.index')->with('success', 'Post restored successfully');
    }

    public function forceDelete($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->forceDelete();

        return redirect()->route('posts.deleted')->with('success', 'Post permanently deleted');
    }
}