<x-layout>
    <x-slot:header>{{ $header }}</x-slot:header>
        <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
            <div class="text-gray-500 text-base">
                <a href="#">{{ $post['author_id'] }}</a> | {{ $post->created_at->diffForhumans()}}
            </div>
            <p class="my-4 font-light">{{$post['body']}}</p>
            <a href="/posts" class="text-blue-500 font-medium hover:underline">&laquo; back to Blog</a>
        </article>
</x-layout>
