<x-admin-layout>
    <!-- Roles Create -->

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex p-2">
                    <a href="{{ route('admin.roles.index') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Role Index</a>
                </div>
                <div class="flex flex-col">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{ route('admin.roles.update', $role->id) }}">
                         @method('PUT')
                         @csrf
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"></label>
                                <div class="mt-1">
                                    <input type="text" class="block w-full" name="name" class="block w-full " value="{{ $role->name }}">
                                </div>
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit" class="ox-4 py-2 bg-green-900 hover:bg-green-700 rounded-md text-white">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-6 p-2">
                    <h2 class="text-2xl font-semibold">Role Permissions</h2>
                    <div class="flex space-x-2 mt-4 p-2">
                        @if ($role->permissions)
                            @foreach ($role->permissions as $role_permission)
                            <form method="POST" class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" action="{{ route('admin.roles.permissions.revoke', [$role->id, $role_permission->id]) }}" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">{{ $role_permission->name }}</button>
                            </form>
                            @endforeach
                        @endif
                    </div>
                    <div class="max-w-xl">
                        <form method="POST" action="{{ route('admin.roles.permissions', $role->id) }}">
                            @csrf
                               <div class="sm:col-span-6">
                                   <label for="permission" class="block text-sm font-medium text-gray-700">Permission</label>
                                   <select id="permission" name="permission" autocomplete="permission-name" class="mt-1 block w-full py-2 px-3">
                                        @foreach ($permissions as $permission)
                                        <option value=" {{ $permission->name }} ">{{ $permission->name }}</option>
                                        @endforeach
                                   </select>
                               </div>
                               <div class="sm:col-span-6 pt-5">
                                   <button type="submit" class="ox-4 py-2 bg-green-900 hover:bg-green-700 rounded-md text-white">Assign Role</button>
                               </div>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
