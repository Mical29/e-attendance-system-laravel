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
    public function index(){
        $roles = Role::all();
        $context = ['roles' => $roles];
        return view('admin.role_list',$context);
    }

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
        $existingRole = Role::where('name','=', $request->input('name'))->first();
        if($existingRole == null){
        $role = Role::create(['name' => $request->input('name'),'role_description' => $request->input('roledescription')]);
        $role->syncPermissions($request->input('permission'));   
        return redirect()->route('roles.index')
                        ->with('success','Role created successfully');

        }
        else{
            return redirect()->route('roles.create')
                        ->with('error','Role is already existed');
        }
             
       
        // $permissions = request('permission');
        // $role->syncPermissions($permissions);
        // $role->save();
        
        
    }

    public function edit($id){

    }

    public function update($id){

    }

    public function destroy($id){
        
    }

    
}
