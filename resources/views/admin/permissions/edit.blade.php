<x-admin-layout>
    <!-- Permissions Create -->

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex p-2">
                    <a href="{{ route('admin.permissions.index') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Permission Index</a>
                </div>
                <div class="flex flex-col p-2 bg-slate-100">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{ route('admin.permissions.update', $permission->id)}}">
                         @csrf
                         @method('PUT')
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700">Permission name</label>
                                <div class="mt-1">
                                    <input type="text" class="block w-full" name="name" class="block w-full" value="{{ $permission->name }}">
                                </div>
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit" class="px-4 py-2 bg-green-900 hover:bg-green-700 rounded-md text-white">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-6 p-2">
                    <h2 class="text-2xl font-semibold">Roles</h2>
                    <div class="flex space-x-2 mt-4 p-2">
                        @if ($permission->roles)
                            @foreach ($permission->roles as $permission_role)
                            <form method="POST" class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" action="{{ route('admin.permissions.roles.remove', [$permission->id, $permission_role->id]) }}" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">{{ $permission_role->name }}</button>
                            </form>
                            @endforeach
                        @endif
                    </div>
                    <div class="max-w-xl">
                        <form method="POST" action="{{ route('admin.permissions.roles', $permission->id) }}">
                            @csrf
                               <div class="sm:col-span-6">
                                   <label for="role" class="block text-sm font-medium text-gray-700">Roles</label>
                                   <select id="role" name="role" autocomplete="role-name" class="mt-1 block w-full py-2 px-3">
                                        @foreach ($roles as $role)
                                        <option value=" {{ $role->name }} ">{{ $role->name }}</option>
                                        @endforeach
                                   </select>
                               </div>
                               <div class="sm:col-span-6 pt-5">
                                   <button type="submit" class="ox-4 py-2 bg-green-900 hover:bg-green-700 rounded-md text-white">Assign Permissions</button>
                               </div>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
