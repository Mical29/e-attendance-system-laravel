@extends('layouts.app')
@section('content')

<!-- for role create -->
<div class="mb-4">
    <h3>Create Roles</h3>
    <section class="rolescreate">
        <form action={{ route('roles.store') }} method=POST enctype="multipart/form-data">
            @csrf
            <!-- start container  -->
            <div class="overflow-hidden mt-3">
                <div class="row gx-5">
                    <div class="col-md-6">
                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3  bg-gradient" id="">

                            <p>
                                <label for="rolename" class="fs-5 fw-bold">Add Role Name</label> <br />
                                <input type="text" name="rolename" placeholder="Staff / Employee ... ">
                            </p>
                            <p>
                                <label for="roledescription" class="fs-5 fw-bold">Add Role Description</label> <br />
                                <textarea id="roledescription" name="roledescription" rows="4" placeholder="Role Description Detail" class="rounded"></textarea>
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
                                    <input type="checkbox" name="{{$value -> name}}" class="custom-control-input" id="{{$value -> name}}">
                                    <label class="custom-control-label" for="{{$value -> name}}">{{$value -> name}}</label>
                                </p>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3  bg-gradient" id="">

                            <p>
                                <label for="existingroles" class="fs-5 fw-bold">Existing Roles</label> <br />
                                <input type="text" name="rolename" placeholder="Staff / Employee ... ">
                            </p>

                        </div>
                    </div>

                    <div style="overflow:auto;" class="m-3">
                        <div style="float:right;">
                            <button type="reset" id="reset">Reset</button>
                            <button type="cancel" id="cancel">Cancel</button>
                            <button type="submit" id="usersubmit">Submit</button>
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
