@extends('layouts.app')
@section('content')

<!-- for role create -->
<form action={{ route('roles.store') }} method=POST enctype="multipart/form-data">
    <p>
        <input type="text" name="rolename" placeholder="Enter Role Name">
    </p>

    @foreach($permission as $value)
    <p class="">
        <input class="form-check-input" type="checkbox" name="{{$value -> name}}">
        <label>{{$value -> name}}</label>
    </p>
    @endforeach


    <div>
        <button type="reset" id="reset">Reset</button>
        <button type="cancel" id="cancel">Cancel</button>
        <button type="submit" id="usersubmit">Submit</button>
    </div>
</form>



@endsection
