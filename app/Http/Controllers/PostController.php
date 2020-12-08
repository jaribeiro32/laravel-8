<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StoreUpdatePostRequest $request)
    {
        $data = $request->all();
        Post::create($data);

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('posts.index');
        }

        return view('admin.posts.show', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('posts.index');
        }

        $post->delete();

        return redirect()->route('posts.index')->with('message', 'Registro removido com sucesso!');
    }
}
