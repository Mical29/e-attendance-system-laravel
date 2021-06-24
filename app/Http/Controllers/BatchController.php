<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatchController extends Controller
{
    //

    public function index(){
        return view('admin/batch_list');
    }

    public function create(){
        return view('admin/create_batch');
    }

    public function store(){
        return view('admin/batch_create');
    }

    public function edit(){
        return view('admin/batch_create');
    }

    public function update(){
        return view('admin/batch_create');
    }

    public function destroy(){
        return view('admin/batch_create');
    }
}
