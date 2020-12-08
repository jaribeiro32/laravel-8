@extends('admin.layouts.app')
@section('title', 'Detalhes Post')

@section('content')

    <a href="{{ route('posts.create') }}">Add</a>
<a href="{{ route('posts.index') }}">Posts</a>
<hr>

<h1>Detalhes Post {{ $post->title }}</h1>

<ul>
    <li><strong>Título: </strong>{{ $post->title }}</li>
    <li><strong>Conteúdo: </strong>{{ $post->content }}</li>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar Post</button>
</form>
@endsection
