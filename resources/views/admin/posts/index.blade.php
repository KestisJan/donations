<x-admin-layout>
    <!-- POST INDEX -->
    <div class="container mx-auto p-4">
        <div class="">
            <!-- POST route to create -->
            <a href="{{route ('admin.posts.create') }}" class="bg-transparaten hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">Create Post</a>
            <a href="{{route ('admin.status.index') }}" class="bg-transparaten hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">Post Status</a>
        </div>
        <!-- POST Loop -->
        @foreach ($posts as $post)
        <!-- POST card -->
        <x-posts-card :post="$post"/>
        @endforeach
    </div>
</x-admin-layout>
