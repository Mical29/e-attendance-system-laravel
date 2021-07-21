@extends('layouts.app')
@section('content')

    <h1>Update Program Category</h1>
    <form action={{ route('programcategory.update',[$category->id]) }} method=POST>
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$category->id}}">
    <input type="text" name="heading" placeholder="Heading" value={{$category->category_heading}}> 
    @foreach($category['sub_category'] as $subCategory)
    <input type="text" name="subheading[]" placeholder="sub heading" value={{$subCategory}}> 
    @endforeach
    
    
    <button>Update </button>
    </form>

@endsection;