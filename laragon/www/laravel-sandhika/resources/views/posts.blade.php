<x-layout>
    <x-slot:header>{{ $header }}</x-slot:header>
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-400">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-gray-500 text-base">
                <a href="#">{{ $post['author_id.user'] }}</a> | {{ $post->created_at->diffForhumans()}}
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="text-blue-500 font-medium hover:underline">Read More &raquo;</a>
        </article>
    @endforeach
</x-layout>
