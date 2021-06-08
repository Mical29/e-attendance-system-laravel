@extends('layouts.app')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

@foreach($programs as $program)
<p> {{$program->program_name }} </p>
@endforeach

@endsection
