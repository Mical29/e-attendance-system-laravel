<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends Controller
{
    //
    // public function index(){
    //     // $roles = Role::all();
    //     // $context = ['roles' => $roles];
    //     // return view('admin.role_list',$context);
    // }

    public function create(){
        $permission = Permission::get();
        return view('admin.create_role',compact('permission'));

    }

    public function store(Request $request){

        // $this->validate($request, [
        //     'rolename' => 'required|unique:roles,name',
        //     'permission' => 'required',
        // ]);
        //  $role = new Role();
        //  $role->name = request('name');
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        
       
        // $permissions = request('permission');
        // $role->syncPermissions($permissions);
        // $role->save();
        echo "Saved Successfully";
        // return redirect()->route('roles.index')
        //                 ->with('success','Role created successfully');
    }

    
}
