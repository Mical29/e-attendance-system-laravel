@extends('layouts.app')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" id="bsalert" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

@endif

<div class="mb-4">
    <h3>Create Courses</h3>
    <section class="rolescreate">
        <!-- start container  -->
        <div class="overflow-hidden mt-3">
            <div class="row gx-5">
                <div class="col-md-12">
                    <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3  bg-gradient" id="">
                        <form action={{ route('course.store') }} method=POST enctype="multipart/form-data">
                            @csrf

                            <p>
                                <label for="name" class="fs-5 fw-bold">Add Course</label> <br />
                                <input type="text" name="name" placeholder="Computer Systems...">
                            </p>
                            <p>
                                <label for="relatedInstructor" class="fs-5 fw-bold">
                                    Choose Related Instructor
                                </label>
                                <br />
                                <select class="" name="relatedInstructor" id="relatedInstructor">
                                    <option selected="" disabled="">Select Instructor</option>
                                    <option value="1">Tr. Daw Yin Yin</option>
                                    <option value="2">Tr. Daw Nu Nu</option>
                                </select>
                            </p>
                            <p>
                                <label for="relatedProgram" class="fs-5 fw-bold" id="">Choose Related Program</label>
                                <br />
                                <select class="" name="relatedProgram" id="relatedProgram">
                                    <option selected="" disabled="">Select Program</option>
                                    @foreach($programs as $program)
                                    <option value={{$program -> id}}>{{$program->program_name}}</option>
                                    @endforeach
                                </select>
                            </p>
                            <div style="overflow:auto;" class="">
                                <div style="">
                                    <button type="reset" id="reset">Reset</button>
                                    <button type="cancel" id="cancel">Cancel</button>
                                    <button type="submit" id="coursecreate">Create</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3  bg-gradient" id="">
                    <form action={{ route('course.store') }} method=POST enctype="multipart/form-data">
                        @csrf

                        <label for="currentCourse" class="fs-5 fw-bold">Computer System</label> <br />

                        <div class="my-3">
                            <i class="far fa-folder-open"></i> <span class="count">5</span> <span class="px-2">|</span>
                            <i class="far fa-file-video"></i> <span class="count">12</span><span class="px-2">|</span>
                            <i class="far fa-file-alt"></i> <span class="count">30</span>
                        </div>

                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3 bg-gradient">
                            <div id="coursecontainer">
                                <div class="chapterbox p-3 border border-gray rounded pl-3 pr-3 mb-3 bg-gradient">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="cfid1">
                                                <p>
                                                    <label for="cfname1" class="fs-6 fw-bold" id="cfname1">Add New Chapter/File Name</label>
                                                    <br />
                                                    <input type="text" id="cfname1" name="cfname1" placeholder="Enter Chapter/File Name...">
                                                </p>
                                                <p>
                                                    <select class="" name="cfoption" id="cfoption">
                                                        <option selected="" disabled="">Select Type</option>
                                                        <option value="Chapter">Chapter</option>
                                                        <option value="File">File</option>
                                                    </select>
                                                </p>

                                                <div class="filebox">
                                                    <p class="fileborder">
                                                        <label for="addfile" class="fw-bold">Add File</label><br />
                                                        <input type="file" name="addfile" class="form-control">
                                                    </p>
                                                </div>
                                                <div class="row fileaction">
                                                    <div class="col-md-12">
                                                        <label for="filebox" class=" fw-bold" id="">File/Chapter Action</label>
                                                        <br />
                                                        <button class="addaction bg-dark">Add new</button>
                                                        <button class="removeaction bg-dark">Remove recent</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" value="1" class="total_count_file">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div style="overflow:auto;" class="">
                            <div style="float:right;">
                                <button type="reset" id="reset">Reset</button>
                                <button type="cancel" id="cancel">Cancel</button>
                                <button type="submit" id="courseupdate">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3">
                    <label for="permission" class="fs-5 fw-bold">Courses</label>
                    <br />
                    <div id="mySidenav" class="sidenav">
                        <a href="#" class="active">Computer System</a>
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
        </div>
</div>
<!-- end container -->
</section>
</div>


<script type="text/javascript" src="{{ URL::asset('js/bob_course_create.js') }}"> </script>
@endsection
