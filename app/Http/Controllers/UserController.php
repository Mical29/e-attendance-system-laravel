<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;

use Illuminate\Support\Arr;

class UserController extends Controller
{
    //

    public function index(Request $request){
        $data = User::orderBy('id','DESC');
        return view('admin.user_index',compact('data'));
    }

    public function create(){
        $roles = Role::pluck('name','name')->all();
        $context =[
            'roles' => $roles
        ];
        return view('admin/create_user',$context);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);        
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    }

    public function destroy(){
        
    }
}
