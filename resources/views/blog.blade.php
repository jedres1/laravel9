<x-layouts.app
    title="Blog"
    meta-description="Blog meta description"
>
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h2>
            <a href="/blog/1">{{$post->title}}</a>
        </h2>
    @endforeach
</x-layouts.app>
