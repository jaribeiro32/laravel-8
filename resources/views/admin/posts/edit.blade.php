<a href="{{ route('posts.index') }}">Posts</a>
<hr>

<h1>Editar Post</h1>

<form action="{{ route('posts.update', $post->id) }}" method="post">

    @method('PUT')

    @include('admin.posts._partials.form')

</form>
