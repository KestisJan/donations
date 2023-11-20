@props(['post'])

<div class="max-w-sm mx-auto mt-8 rounded overflow-hidden shadow-lg bg-white border border-gray-500">
    <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $post->images) }}" alt="{{ $post->title }}">
    <div class="px-6 py-4">
        <div class="flex justify-between items-center mb-2">
            <h2 class="text-xl font-bold">{{ $post->title }}</h2>
            <a href="{{ route('admin.posts.edit', $post->id) }}" class="text-blue-500 font-sans text-lg">Edit</a>
        </div>
        <div class="mb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">{{ $post->tags }}</span>
        </div>
        <div class="flex justify-between">
            <div>
                <p class="text-sm text-gray-500">Current: ${{ $post->donation_start }}</p>
                <p class="text-sm text-gray-500">Goal: ${{ $post->donation_goal }}</p>
            </div>
            <a href="{{ route('admin.posts.show', $post->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Read more</a>
        </div>
    </div>
</div>


