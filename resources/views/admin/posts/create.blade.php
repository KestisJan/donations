<x-admin-layout>
    <!-- POSTS Create -->
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md justify-content">
        <div class="bg-white py-10 px-10 shadow rounded-lg sm:px-6 ">
            <h1 class="mt-4 text-xl font-medium text-gray-800">Create Post</h1>
            <form class="mt-5 space-y-6" action="{{route ('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Title input -->
                <div>
                    <label for="title" class="block text-xl font-medium text-gray-800">Title</label>
                    <div class="mt-2">
                        <input type="text" name="title" required  class="w-full border border-gray-400 px-3 py-2 rounded-lg shadow-sm"/>
                    </div>
                </div>
                <!-- Donation input -->
                <div>
                    <label for="donation_goal" class="block text-xl font-medium text-gray-800">Donations Goal</label>
                    <div class="mt-2">
                        <input type="text" name="donation_goal" required class="w-full border border-gray-400 px-3 py-2 rounded-lg shadow-sm">
                    </div>
                </div>
                <!-- Tag input -->
                <div>
                    <label for="tags" class="block text-xl font-medium text-gray-800">#Tags</label>
                    <div class="mt-2">
                        <input type="text" name="tags" class="w-full border border-gray-400 px-3 py-2 rounded-lg shadow-sm">
                    </div>
                </div>
                <!-- Story input -->
                <div>
                    <label for="stories" class="block text-xl font-medium text-gray-800">Story</label>
                    <div class="mt-2">
                        <textarea type="text" name="stories" rows="4" required class="w-full border border-gray-400 py-2 rounded-lg shadow-sm"></textarea>
                    </div>
                </div>
                <!-- Image input -->
                <div>
                    <label for="images" class="block text-xl font-medium text-gray-800">Please attach pictures for your story</label>
                    <input type="file" class="block text-xl font-medium text-gray-700" name="images"/>
                </div>
                <!-- Create Button -->
                <div>
                    <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Create Post</button>
                </div>
            </form>
        </div>
    </div>
  
                        
    
    
</x-admin-layout>
