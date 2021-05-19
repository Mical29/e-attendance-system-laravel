<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;

class UserController extends Controller
{
    //

    public function index(Request $request){

    }

    public function create(){
        return view('admin/create_user');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
    }
}
