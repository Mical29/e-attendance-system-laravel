<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\ProgramCategory;

class ClassController extends Controller
{
    //

    public function index(){
        $recentPrograms = Program::orderBy("id")->take(3)->get();
        $programs = Program::all(); 
        $context = [
            'programs'=> $programs,
            'recentPrograms' => $recentPrograms
        ];
        return view('shared.program_index',$context);
    }

     public function show($id){
        echo "Show Hello World";
     }

    public function create(){
        $programCategories = ProgramCategory::all();
        $context = [
            'categories' => $programCategories
        ];
        return view('admin/create_class',$context);
    }

    public function store(){
        $programs = new Program();
        $programs->program_name = request('programname');
        $programs->program_image = request('programimg');
        $programs->program_category = request('programcategory');
        $programs->domestic_student = request('programfeeslocal');
        $programs->international_student = request('programfeesforeign');
        $programs->program_fees_message = request('programfeesmessage');
        $programs->eligibility_and_requirements = request('programRequirement');

        $destinationPath = public_path().'/images';
        $programs->program_image = request('programimg')->getClientOriginalName();
     
        $fileName = request('programimg')->getClientOriginalName();

        request('programimg')->move($destinationPath,$fileName);
       
        $programs->save();
        return redirect()->route('programs.index')->with('success','Program created successfully :)');
        
    }

    public function edit($id){
        echo "Hello World";
        $program = Program::findOrFail($id);
        $context = [
            'program' => $program
        ];
        return view('admin/update_program',$context);

    }

    public function update($id){
        $program = Program::find(request('id'));
        $program->program_name = request('programname');
        $program->program_image = request('programimg');
        $program->program_category = request('programcategory');
        $program->domestic_student = request('programfeeslocal');
        $program->international_student = request('programfeesforeign');
        $program->program_fees_message = request('programfeesmessage');
        $program->eligibility_and_requirements = request('programRequirement');     
        $program->save();     
        echo("successfully updated");
    }

    public function destory(){

    }
}
