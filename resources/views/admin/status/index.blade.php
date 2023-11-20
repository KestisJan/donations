<x-admin-layout>
    <!-- Status INDEX -->

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($posts as $post)
                <x-posts-card :post="$post"/>
                @endforeach
            </div>
        </div>
    </div>
</x-admin-layout>
