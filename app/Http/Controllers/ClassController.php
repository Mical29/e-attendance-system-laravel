<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ClassController extends Controller
{
    //

    public function index(){
        
    }

    public function create(){
        $program = new Program();
        
        return view('admin/create_class');
    }

    public function store(Request $request){
        request()->validate([
            'programname' => 'required',
            'programimg' => 'required',
            'programfeeslocal' => 'required',
            'programfeesforeign' => 'required',
            'programfeesmessage' => 'required',

        ]);
        $input = $request->all();
        Program::create($request->all());
        echo'Successfully Saved :)';

    }

    public function destory(){

    }
}
