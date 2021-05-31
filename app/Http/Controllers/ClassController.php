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
        return view('admin/create_class');
    }

    public function store(Request $request){
        $programs = new Program();
        $programs->program_name = $request->input('programname');
        $programs->program_image = $request->input('programimg');
        $programs->domestic_student = $request->input('programfeeslocal');
        $programs->international_student = $request->input('programfeesforeign');
        $programs->program_fees_message = $request->input('programfeesmessage');
        $programs->eligibility_and_requirements = $request->input('programRequirement');
      

       
        $programs->save();
        echo'Successfully Saved :)';
    }

    public function destory(){

    }
}
