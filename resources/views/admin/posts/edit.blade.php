<x-admin-layout>
    <!-- POSTS EDIT -->
    <div class="flex md:container md:mx-auto items-center justify-center">
        <div class="w-1/2">
            <h1 class="mt-4 text-xl font-medium text-gray-800 text-center">Edit Post</h1>
            <form class="mt-5 space-y-6" action="{{route ('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <!-- Title input -->
                <div>
                    <label for="title" class="block text-xl font-medium text-gray-800">Title</label>
                    <div class="mt-2">
                        <input type="text" name="title" required  class="w-full border border-gray-400 px-3 py-2 rounded-lg shadow-sm" value="{{ $post->title }}"/>
                    </div>
                </div>
                <!-- Donation input -->
                <div>
                    <label for="donation_goal" class="block text-xl font-medium text-gray-800">Donations Goal</label>
                    <div class="mt-2">
                        <input type="text" name="donation_goal" required class="w-full border border-gray-400 px-3 py-2 rounded-lg shadow-sm" value="{{ $post->donation_goal }}">
                    </div>
                </div>
                <!-- Tag input -->
                <div>
                    <label for="tags" class="block text-xl font-medium text-gray-800">#Tags</label>
                    <div class="mt-2">
                        <input type="text" name="tags" class="w-full border border-gray-400 px-3 py-2 rounded-lg shadow-sm" value="{{ $post->tags }}">
                    </div>
                </div>
                <!-- Story input -->
                <div>
                    <label for="stories" class="block text-xl font-medium text-gray-800">Story</label>
                    <div class="mt-2">
                        <textarea type="text" name="stories" rows="7" required class="w-full border border-gray-400 py-2 rounded-lg shadow-sm">{{ $post->stories }}</textarea>
                    </div>
                </div>
                <!-- Image input -->
                <div>
                    <label for="images" class="block text-xl font-medium text-gray-800">Upload new images for your story</label>
                    <input type="file" class="block text-xl font-medium text-gray-700" name="images"/>
                </div>
                <!-- Create Button -->
                <div>
                    <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Update Post</button>
                    <a href="{{route ('admin.posts.index') }}" class="bg-red-500 text-black hover:bg-red-500 text-red-700 font-semibold  py-2 px-4 border border-red-500 hover:border-transparent rounded">Back</a>
                </div>
            </form>
        </div>
    </div>
  
                        
    
    
</x-admin-layout>
