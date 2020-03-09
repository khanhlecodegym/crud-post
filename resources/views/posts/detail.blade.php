@include('partials.head')

<body>
    @include('partials.nav')
    <div class="container">
        <h2 class="text-center">{{ $post->title }}</h2>
        <p>{!! $post->content !!}</p>
    </div>
</body>
</html>
