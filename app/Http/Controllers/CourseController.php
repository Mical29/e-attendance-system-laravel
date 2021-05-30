<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(){

    }

    public function create(){

        return view('admin/create_course');
    }

    public function store(Request $request){
        

    }

    public function destroy(){

    }
}
