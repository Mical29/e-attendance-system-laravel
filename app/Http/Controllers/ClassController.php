<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ClassController extends Controller
{
    //

    public function index(){
        $programs = Program::all();
        $context = [
            'programs'=> $programs
        ];
        return view('shared.program_index',$context);
    }

    public function create(){
        return view('admin/create_class');
    }

    public function store(){
        $programs = new Program();
        $programs->program_name = request('programname');
        // $programs->program_image = $request->input('programimg');
        $programs->domestic_student = request('programfeeslocal');
        $programs->international_student = request('programfeesforeign');
        $programs->program_fees_message = request('programfeesmessage');
        $programs->eligibility_and_requirements = request('programRequirement');

        $destinationPath = public_path().'/images';
        $programs->program_image = request('programimg')->getClientOriginalName();
     
        $fileName = request('programimg')->getClientOriginalName();

        request('programimg')->move($destinationPath,$fileName);
       
        $programs->save();
        return redirect()->route('shared.program_index')->with('success','Program created successfully :)');
        
    }

    public function destory(){

    }
}
