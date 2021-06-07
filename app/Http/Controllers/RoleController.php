<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    //
    public function index(){
        $roles = Role::all();
        $context = ['roles' => $roles]
        return view('admin.role_list',$context);
    }

    public function create(){
        $permission = Permission::get();
        return view('admin.create_role',compact('permission'));

    }

    public function store(Request $request){
        
    }

    
}
