<a href="{{ route('posts.index') }}">Posts</a>
<hr>

<h1>Novo Post</h1>


<form action="{{ route('posts.store') }}" method="post">

    @csrf

    @include('admin.posts._partials.form')

</form>
