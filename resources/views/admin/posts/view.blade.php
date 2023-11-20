<x-admin-layout>
    <!-- POST INDEX -->
    <div class="max-w-fit mx-auto mt-8 p-4 bg-white shadow-md rounded-md relative">
        <div class="flex flex-row-reverse">
            <a href="#" class="text-black-500 border border-pink-400 bg-red-500">Donate</a>
        </div>

        <div class="absolute top-4 left-4 text-blue-500 hover:underline">
            <a href="{{ route('admin.posts.index') }}" class="text-blue-500 hover:underline">Go back</a>
            {{-- Add edit and delete buttons or other actions --}}
        </div>

        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="text-gray-600 mb-4">{{ $post->created_at->toFormattedDateString() }}</p>

        <div class="mb-6 max-w-2xl">
            <img src="{{ asset('storage/' . $post->images) }}" alt="{{ $post->title }}" class="w-full h-auto rounded-md">
        </div>

        <p class="text-lg leading-relaxed mb-4">{{ $post->stories }}</p>

        {{-- Donation Section --}}
        <div class="mb-8">
            <h2 class="text-xl font-bold mb-2">Donations</h2>
            <p class="text-gray-600 mb-2">Goal: ${{ $post->donation_goal }}</p>
            <p class="text-gray-600">Current Donation: ${{ $post->donation_start }}</p>
        </div>
        
    </div>
</x-admin-layout>
