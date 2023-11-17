<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles') );
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Role::create($validated);

        return redirect('admin.roles.index');
    }

    public function edit(Role $roles)
    {
        return view('admin.roles.edit', compact('roles'));
    }

    public function update(Request $request, Role $roles)
    {
        $validated = $request->validate([ 'name' => 'required' ]);
        
        $roles->update($validated);

        return redirect('admin.roles.index');
    }
    
}
