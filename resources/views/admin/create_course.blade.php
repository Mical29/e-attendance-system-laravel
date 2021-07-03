@extends('layouts.app')
@section('content')


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
                                            <p>
                                                <label for="chapter1" class="fs-6 fw-bold">Chapter #1</label>
                                                <br />
                                                <input type="text" id="chapter1" name="chapter1" placeholder="Enter Chapter #1 Name...">
                                            </p>
                                            <div class="filebox">
                                                <p>
                                                    <label for="file1name" class="fw-bold">File #1</label><br />
                                                    <input type="text" id="file1name" name="file1name" placeholder="Enter File #1 Name..."><br />
                                                    <input type="file" name="file1upload" class="form-control mt-3">
                                                </p>
                                            </div>
                                            <div class="row fileaction">
                                                <div class="col-md-12">
                                                    <label for="filebox" class=" fw-bold" id="">File Action</label>
                                                    <br />
                                                    <button class="addfile bg-dark">Add new file</button>
                                                    <button class="removefile bg-dark">Remove recent file</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="1" class="total_count_file">
                            <div class="row chapteraction">
                                <div class="col-md-12" style="">
                                    <div style="float:right;" class="">
                                        <label for="pb" class="fs-6 fw-bold" id="">Chapter Action</label>
                                        <br />
                                        <button class="addchapter">Add new chapter</button>
                                        <button class="removechapter">Remove recent chapter</button>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" value="1" id="total_count_chapter">
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
