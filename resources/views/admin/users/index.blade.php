<x-admin-layout>
    <!-- Roles INDEX -->

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="table">
                                    <thead class="thead-light">
                                      <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                      </tr>
                                    </thead>
                                    <tbody class="justify-content">
                                     @foreach ($users as $user)
                                     <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                {{ $user->name }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                {{ $user->email }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-between">
                                                    <a href="{{ route('admin.users.show', $user->id) }}" 
                                                    class="px-6 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Roles</a>
                                                    <form method="POST" class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" action="{{ route('admin.users.destroy', $user->id) }}" onsubmit="return confirm('Are you sure?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">Delete</button>
                                                    </form>
                                            </div>
                                        </td>
                                     </tr>
                                     @endforeach
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
