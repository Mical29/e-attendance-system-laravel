@extends('layouts.app')
@section('content')
<!-- HTML HERE 
Head - Body are under layouts/app

-->
<div class="row mb-4">
    <div class="col-md-8">
        <h3>Add Batch</h3>
        <section class="submitbox border border-gray rounded pl-3 pr-3 pb-3">
            <div class="operations">
                <div class="operations__tab-container">
                    <button class="btn operations__tab operations__tab--1 operations__tab--active" data-tab="1">
                        <span>Batch Details</span>
                    </button>
                    <button class="btn operations__tab operations__tab--2" data-tab="2">
                        <span>Instructor</span>
                    </button>
                    <button class="btn operations__tab operations__tab--3" data-tab="3">
                        <span>Eligibility & Requirements</span>
                    </button>
                </div>
                <form id="programRegForm" action={{ route('batch.store') }} method=POST enctype="multipart/form-data">
                    @csrf
                    <!-- One "operations__content" for each step in the form: -->
                    <div class="operations__content operations__content--1 operations__content--active">
                        <p>
                            <label for="batchname" class="text-muted">Batch Name</label><br />
                            <input placeholder="E.g Batch 20..." name="batchname" class="rounded">
                        </p>
                        <p>
                            <label for="programcategory" class="text-muted">Program</label>
                            <br />
                            <select class="form-control" name="programcategory" id="programcategory">
                                <option selected="" disabled="">Select a Program </option>
                                <optgroup label="Information Technology Categories">
                                    <option value="iot">Internet of Things</option>
                                    <option value="wdp">Web Development in PHP</option>
                                    <option value="wdf">Web Developement Foundation</option>
                                </optgroup>
                                <optgroup label="Other Categories">
                                    <option value="bm">Business Management</option>
                                    <option value="dm">Digital Marketing</option>
                                    <option value="cw">Content Writing</option>
                                </optgroup>
                            </select>
                        </p>
                        <p>
                            <label for="classstartsdate" class="text-muted">Start Date</label> <br />
                            <input type="date" name="classstartsdate" id="classstartsdate" class="rounded">
                        </p>
                        <p>
                            <label for="timefrom" class="text-muted">From</label> <br />
                            <input type="time" name="timefrom" id="timefrom" class="rounded">
                        </p>
                        <p>
                            <label for="timeto" class="text-muted">To</label> <br />
                            <input type="time" name="timeto" id="timeto" class="rounded">
                        </p>

                    </div>

                    <div class="operations__content operations__content--2">
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#instructorModal" aria-pressed="true">
                            <i class="fas fa-plus-circle"></i> Add New Instructor
                        </button>
                        <p class="message mb-3 mt-2 text-muted">The list is showing the instructors you have chosen. </p>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <div class="card">
                                        <img src="https://learn.captureone.com/wp-content/uploads/sites/2/alexander-vinogradov-1900x1267-1419x946.jpg" class="  card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Kaung Min Khant</h5>
                                            <p class="card-text">
                                                Computer System, Computer Science, Internet of Things, Systems & Networking
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <div class="card">
                                        <img src="https://learn.captureone.com/wp-content/uploads/sites/2/alexander-vinogradov-1900x1267-1419x946.jpg" class="  card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Kaung Min Khant</h5>
                                            <p class="card-text">
                                                Computer System, Computer Science, Internet of Things, Systems & Networking
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <div class="card">
                                        <img src="https://learn.captureone.com/wp-content/uploads/sites/2/alexander-vinogradov-1900x1267-1419x946.jpg" class="  card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Kaung Min Khant</h5>
                                            <p class="card-text">
                                                Computer System, Computer Science, Internet of Things, Systems & Networking
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <div class="card">
                                        <img src="https://learn.captureone.com/wp-content/uploads/sites/2/alexander-vinogradov-1900x1267-1419x946.jpg" class="  card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Kaung Min Khant</h5>
                                            <p class="card-text">
                                                Computer System, Computer Science, Internet of Things, Systems & Networking
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="operations__content operations__content--3">
                        <p class="text-danger">
                            <label for="batchRequirement" class="text-muted">Please Describe Requirements of a Batch.</label> <br />
                            <textarea id="batchRequirement" name="batchRequirement">Hello, World!</textarea>
                        </p>

                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <button type="reset" id="reset">Reset</button>
                                <button type="cancel" id="cancel">Cancel</button>
                                <button type="submit" id="batchsumbit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <div class="col-md-4">
        <h3>Existing Batch</h3>
        <section class="existingclasslist border border-gray rounded pl-3 pr-3 pb-3">

            <p class="message mb-3 mt-2 text-muted">The list is showing 2 of the last created batches.</p>

            <div class="card mt-3">
                <img class="card-img-top" src="https://cdn.pixabay.com/photo/2012/08/27/14/19/mountains-55067__340.png" height="120px" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="#">Diploma in HR Management</a></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Batch 10</h6>
                    <p class="card-text">Start: 24th July 2021</p>
                </div>
            </div>

            <div class="card mt-3">
                <img class="card-img-top" src="https://i.ytimg.com/vi/c7oV1T2j5mc/maxresdefault.jpg" height="120px" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="#">Diploma in Digital Marketing</a></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Batch 03</h6>
                    <p class="card-text">Start: 20th July 2021</p>
                </div>
            </div>

            <section />
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="instructorModal" tabindex="-1" aria-labelledby="instructorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="instructorModalLabel">Add Instructor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="container form-group moodle mt-3">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://learn.captureone.com/wp-content/uploads/sites/2/alexander-vinogradov-1900x1267-1419x946.jpg" class="modleprofile">
                        </div>
                        <div class="col-md-9">
                            <h4 class="modname">Kaung Min Khant</h4>
                            <p class="modcourse">
                                Computer System, Computer Science, Internet of Things, Systems & Networking
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://usercontent.one/wp/www.fujixpassion.com/wp-content/uploads/2018/11/destaque.jpg" class="modleprofile">
                        </div>
                        <div class="col-md-9">
                            <h4 class="modname">Ye Linn Aung</h4>
                            <p class="modcourse">
                                Computer System, Computer Science, Internet of Things, Systems & Networking
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://i.pinimg.com/originals/61/79/8c/61798c2f1bfdb2236d51681ffc1ddba4.jpg" class="modleprofile">
                        </div>
                        <div class="col-md-9">
                            <h4 class="modname">Thihan Hein</h4>
                            <p class="modcourse">
                                Computer System, Computer Science, Internet of Things, Systems & Networking
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://i.ytimg.com/vi/N2bhaD9tiWI/maxresdefault.jpg" class="modleprofile">
                        </div>
                        <div class="col-md-9">
                            <h4 class="modname">Phone Pyae Thant Zin</h4>
                            <p class="modcourse">
                                Computer System, Computer Science, Internet of Things, Systems & Networking
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ URL::asset('js/bob_batch_create.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bob_program_index.js') }}"></script>
@endsection
