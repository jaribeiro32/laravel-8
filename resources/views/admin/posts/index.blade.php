<a href="{{ route('posts.create') }}">Add</a>

<hr>

@if(session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<h1>Listagem Posts</h1>

<form action="{{ route('posts.search') }}" method="post">
    @csrf
    <input type="text" name="search" id="search" placeholder="Filtrar:">
    <button type="submit">Filtrar</button>
</form>

@foreach($posts as $post)
    <p>{{ $post->title }}[ <a href="{{ route('posts.show', $post->id) }}">Ver</a> ] [ <a
            href="{{ route('posts.edit', $post->id) }}">Edit</a> ] </p>
@endforeach


<hr>
@if(isset($filters))
    {{ $posts->appends($filters)->links() }}
@else
    {{ $posts->links() }}
@endif
