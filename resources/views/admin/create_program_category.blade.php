@extends('layouts.app')
@section('content')

    <h1>Program Category</h1>
    <form action={{ route('programcategory.store') }} method=POST enctype="multipart/form-data">
    @csrf
    <input type="text" name="heading" placeholder="Heading"> 
    <input type="text" name="subheading[]" placeholder="sub heading"> 
    <input type="text" name="subheading[]" placeholder="sub heading"> 
    <button>Save </button>
    </form>

@endsection;