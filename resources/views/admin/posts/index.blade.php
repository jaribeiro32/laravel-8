<a href="{{ route('posts.create') }}">Add</a>

<hr>

@if(session('message'))
<div>
    {{ session('message') }}
</div>
    @endif

<h1>Listagem Posts</h1>

@foreach($posts as $post)
    <p>{{ $post->title }}[ <a href="{{ route('posts.show', $post->id) }}">Ver</a> ] </p>
@endforeach
