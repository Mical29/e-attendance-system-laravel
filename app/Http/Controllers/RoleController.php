<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    //
    public function index(){

    }

    public function create(){
        $permission = Permission::get();
        return view('admin.create_role',compate('permission'));

    }

    public function store(Request $request){
        
    }

    
}
