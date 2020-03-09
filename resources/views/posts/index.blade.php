@include('partials.head')

<body>
    @include('partials.nav')
    <div class="container">
        @include('partials.mesage')
        <h2 class="text-center">List Post</h2>
        @foreach ($posts as $post)
            <p><a href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a></p>
            <p>{{ $post->create_at }}</p>

            <p><a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-primary">Edit</a></p>

            <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <hr>
        @endforeach
    </div>
</body>
</html>
