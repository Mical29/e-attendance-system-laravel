<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramCategory;
use DB;

class ProgramCategoryController extends Controller
{
    //
    public function index(){
       
        // return view('admin.role_list',$context);
    }

    public function create(){
        return view('admin.create_program_category');
    }

    public function store(){
        $category = new ProgramCategory();
        $category->category_heading =request('heading');
        $category->sub_category = request('subheading');
        $category->save();
        echo("Successfully Saved");
    }

    public function show($id){
        $category = ProgramCategory::findOrFail($id);
        $context = [
            'category' => $category
        ];
        return view('admin/update_program_category',$context);
    }

    public function edit($id){
        $category = ProgramCategory::findOrFail($id);
        $context = [
            'category' => $category
        ];
        return view('admin/update_program_category',$context);

    }

    public function update($id){
        $category = ProgramCategory::find(request('id'));
        $category->category_heading =request('heading');
        $category->sub_category = request('subheading');
        $category->save();           
        echo("successfully updated");
    }

    public function destroy($id){
        
    }
}
