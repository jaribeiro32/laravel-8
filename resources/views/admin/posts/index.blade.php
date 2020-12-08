<h1>Listagem Posts</h1>

@foreach($posts as $post)
    <p>{{ $post->title }}</p>
@endforeach
