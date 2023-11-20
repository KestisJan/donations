@props(['post'])
<div class="grid justify-between border-2 border-gray-700 px-4">
    <div class="flex items-center space-x-4 justify-end">
        <a href="{{ route('admin.posts.edit', $post->id) }}" class="text-blue-500">Edit</a>
    </div>
    <div class="grid-cols-1 text-3xl font-bold dark:text-black py-2">
        <h2>{{ $post->title}}</h2>
    </div>
    <div class="grid-cols-2 text-2xl font-bold py-2">
        <h2># {{ $post->tags}}</h2>
    </div>
    <div class="grid-cols-3 text-2xl font-bold py-2">
        <h2>Current: {{ $post->donation_start}}$</h2>
        <h2>Goal: {{ $post->donation_goal}}$</h2>
    </div>
    <div class="grid-cols-4 py-5">
        <img  class="object-cover h-48 w-96 border" src="{{ asset('storage/' . $post->images) }}"/>
    </div>
</div>