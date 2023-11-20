@props(['post'])
<div class="max-w-sm rounded overflow-hidden shadow-lg px-4">
    <a href="{{ route('admin.posts.edit', $post->id) }}" class="flex flex-row-reverse text-blue-500">Edit</a>
    <img  class="w-full" src="{{ asset('storage/' . $post->images) }}"/>
    <h2># {{ $post->tags}}</h2>
    <div class="px-6 py-4">
        <h2>Title: {{ $post->title}}</h2>
        <h2>Current: {{ $post->donation_start}}$</h2>
        <h2>Goal: {{ $post->donation_goal}}$</h2>
    </div>
    <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $post->tags }}</span>
    </div>
</div>