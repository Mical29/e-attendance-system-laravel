<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Program;

class CourseController extends Controller
{
    //
    public function index(){

    }

    public function create(){

        $programs = Program::all(); 
        $context = [
            'programs'=> $programs
        ];        
        return view('admin/create_course',$context);
    }

    public function store(){
        $course = new Course();
        $course->course_name= request('name');
        $course->program_id = request('relatedProgram');
        $course->save();
        return redirect()->route('course.create')->with('success','Course created successfully :)');
    }

    public function destroy(){

    }
}
