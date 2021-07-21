@extends('layouts.app')
@section('content')

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" id="bsalert" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

@endif

<!-- for role create -->
<div class="mb-4">
    <h3>Update Roles</h3>
    <section class="rolescreate">
        <form action={{ route('roles.update',[$role->id]) }} method=POST enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- start container  -->
            <div class="overflow-hidden mt-3">
                <div class="row gx-5">
                    <div class="col-md-6">
                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3  bg-gradient" id="">

                            <p>
                                <label for="name" class="fs-5 fw-bold">Add Role Name</label> <br />
                                <input type="text" name="name" placeholder="Staff / Employee ... " value="{{$role->name}}">
                            </p>
                            <p>
                                <label for="roledescription" class="fs-5 fw-bold">Add Role Description</label> <br />
                                <textarea id="roledescription" name="roledescription" rows="4" placeholder="Role Description Detail" class="rounded"  value="{{$role->role_description}}">{{$role->role_description}}</textarea>
                            </p>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3">
                            <label for="permission" class="fs-5 fw-bold">Manage Permission</label>
                            <br />

                            <div class="custom-control custom-switch">
                                @foreach($permission as $value)
                                <p>
                                    <input type="checkbox" name="permission[]" class="custom-control-input" id="{{$value -> name}}" value="{{$value -> id }}">
                                    <label class="custom-control-label" for="{{$value -> name}}">{{$value -> name}}</label>
                                </p>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div style="overflow:auto;" class="m-3">
                        <div style="float:right;">
                            <button type="reset" id="reset">Reset</button>
                            <button type="cancel" id="cancel">Cancel</button>
                            <button type="submit" id="rolecreate">Create</button>
                        </div>
                    </div>

                </div>
                <!-- end container -->
        </form>
    </section>
</div>
</div>



<script type="text/javascript" src="{{ URL::asset('js/bob_role_create.js') }}"></script>
@endsection
