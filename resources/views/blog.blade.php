<x-layouts.app
    title="Blog"
    meta-description="Blog meta description"
>
    <h1>Blog</h1>
    @foreach($posts as $post)
        {{ $post['title'] }}
    @endforeach
</x-layouts.app>
