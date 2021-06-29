@extends('layouts.app')
@section('content')


<div class="mb-4">
    <h3>Create Courses</h3>
    <section class="rolescreate">
        <form action={{ route('course.store') }} method=POST enctype="multipart/form-data">
            @csrf
            <!-- start container  -->
            <div class="overflow-hidden mt-3">
                <div class="row gx-5">
                    <div class="col-md-9">
                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3  bg-gradient" id="">

                            <p>
                                <label for="name" class="fs-5 fw-bold">Add Course</label> <br />
                                <input type="text" name="name" placeholder="Computer Systems...">

                        </div>

                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3  bg-gradient" id="">
                            <label for="roledescription" class="fs-5 fw-bold">Add Role Description</label> <br />
                            <textarea id="roledescription" name="roledescription" rows="4" placeholder="Role Description Detail" class="rounded"></textarea>
                            </p>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3">
                            <label for="permission" class="fs-5 fw-bold">Courses</label>
                            <br />
                            <div id="mySidenav" class="sidenav">
                                <a href="#">Computer System</a>
                                <a href="#">Networking</a>
                                <a href="#">Research & Development</a>
                                <a href="#">Artificial Intelligece</a>
                                <a href="#">Sales & Marketing</a>
                                <a href="#">Computer Theory</a>
                                <a href="#">Hardware Maintenance</a>
                                <a href="#">UI / UX Management</a>
                            </div>
                        </div>
                    </div>

                    <div style="overflow:auto;" class="m-3">
                        <div style="float:right;">
                            <button type="reset" id="reset">Reset</button>
                            <button type="cancel" id="cancel">Cancel</button>
                            <button type="submit" id="coursecreate">Create</button>
                        </div>
                    </div>

                </div>
                <!-- end container -->
        </form>
    </section>
</div>
</div>


<script type="text/javascript" src="{{ URL::asset('js/bob_course_create.js') }}"> </script>
@endsection
