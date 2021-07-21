@extends('layouts.app')

@section('content')       
    <h1>Dashboard</h1>
        <a href="http://127.0.0.1:8000/users/create"  rel="noopener noreferrer">Create Users</a> <br>
        <a href="http://127.0.0.1:8000/roles/create"  rel="noopener noreferrer">Create Roles</a> <br>
        <a href="http://127.0.0.1:8000/programs/create" rel="noopener noreferrer">Create Programs</a> <br>
        <a href="http://127.0.0.1:8000/course/create"  rel="noopener noreferrer">Create Course</a> <br>
        <a href="http://127.0.0.1:8000/programcategory/create"  rel="noopener noreferrer">Create Program Category</a> <br>

@endsection