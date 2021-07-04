<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Program;
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
        $roles = Role::all();
        $programs = Program::all();// Not Program it will be course
        $context=[
            'roles'=>$roles,
            'programs' => $programs
        ];
        return view('admin/create_user',$context);
    }

    public function store(){
        // $this->validate($request, [
        //     'name '=> 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'password ' => 'required|same:userpasswordconfirm',
        //     'roles' => 'required'
        // ]);
        $user = new User();
        $user->name = request('profilefirstname');
        $user->email = request('profileemail');
        $user->password = Hash::make(request('userpassword'));

        $user->assignRole(request('roles'));// Assign Roles
        
        echo("Successfully Saved :)");
    }

    public function destroy(){
        
    }
}
