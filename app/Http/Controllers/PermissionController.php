<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-permission|edit-permission|delete-permission', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-permission', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-permission', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-permission', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view(
            'permission.index',
            [
                'permissions' => Permission::orderBy('id', 'DESC')->paginate(4),
            ]
        );
    }

    public function create()
    {
        return view('permission.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Permission::create(['name' => $request->name]);
        return redirect()->route('permissions.index')->withSuccess('New permission is added successfully');
    }

    public function show(Permission $permission)
    {
        return view('permission.show', compact('permission'));
    }
    public function edit(Permission $permission)
    {
        return view('permission.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $permission->update(['name' => $request->name]);
        return redirect()->route('permissions.index')->withSuccess('Permission is updated successfully');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index')->withSuccess('Permission is deleted successfully');
    }
}
