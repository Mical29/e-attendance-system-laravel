@extends('layouts.app')
@section('content')
<!-- HTML HERE 
Head - Body are under layouts/app

-->
<div class="row mb-4">
<div class="col-md-8">
<h3>Add Class</h3>
<section class="submitbox border border-gray rounded pl-3 pr-3 pb-3">
<div class="operations">
        <div class="operations__tab-container">
          <button class="btn operations__tab operations__tab--1 operations__tab--active" data-tab="1">
            <span>Class Details</span>
          </button>
          <button class="btn operations__tab operations__tab--2" data-tab="2">
            <span>Timeline</span>
          </button>
          <button class="btn operations__tab operations__tab--3" data-tab="3">
            <span>Fees</span> 
          </button>
          <button class="btn operations__tab operations__tab--4" data-tab="4">
            <span>Eligibility & Requirements</span> 
          </button>
        </div>
        <form id="regForm" action="">
                <!-- One "operations__content" for each step in the form: -->
                <div class="operations__content operations__content--1 operations__content--active">
                <p>
                    <label for="classname" class="text-muted">Class Name</label><br/>
                    <input placeholder="E.g Diploma in IT..." name="classname" class="rounded">
                </p>     
                <p>
                    <label for="batchid" class="text-muted">Batch ID</label>
                    <br />
                    <input placeholder="E.g. Batch 27..." name="batchid" class="rounded">
                </p>
                <p>
                <label for="classcategory" class="text-muted">Category</label>
                <br />
                <select class="form-control" name="classcategory" id="classcategory">
                <option selected="" disabled="">Select a Category</option>
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
                    <label for="classmessage" class="text-muted">Message</label> <br />
                    <textarea id="classmessage" name="classmessage" rows="4" placeholder="Lorem ipsum dolor sit amet..." class="rounded"></textarea>
                </p>
                
                </div>

                <div class="operations__content operations__content--2">
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
                
                <div class="operations__content operations__content--3">
                <p>
                <label for="classfeeslocal" class="text-muted">For Domestic/Old Student</label> <br />
                <input type="number" name="classfeeslocal" id="classfeeslocal" class="rounded">
                </p>
                <p>
                <label for="classfeesforeign" class="text-muted">For International/New Student</label> <br />
                <input type="number" name="classfeesforeign" id="classfeesforeign" class="rounded">
                </p>
                <label for="classfeesmessage" class="text-muted">Class Fees Message</label> <br />
                <textarea id="classfeesmessage" name="classfeesmessage" rows="4" placeholder="Message for the class fees " class="rounded">*Fees apply to all Myanmar residents (Myanmar Citizens, Permanent Residents and all pass holders excluding those holding a Student Pass)</textarea>
                </div>

                <div class="operations__content operations__content--4">
                <p class="text-danger">
                    <label for="classRequirement" class="text-muted">Please Describe Requirements of a Student.</label> <br />
                <textarea id="classRequirement">Hello, World!</textarea>
                </p>

                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button type="reset" id="reset">Reset</button>
                        <button type="cancel" id="cancel">Cancel</button>
                        <button type="submit" id="classsumbit">Submit</button>
                    </div>
                </div>
                </div>
        </form>
</div>
</section>
</div>

<div class="col-md-4">
<h3>Existing Classes</h3>
<section class="existingclasslist border border-gray rounded pl-3 pr-3 pb-3">

<p class="message mb-3 mt-2 text-muted">The list is showing 2 of the last created class.</p>

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

<section/>
</div>
</div>

<div class="row">
<div class="col-md-12">
<h3>Add Instructor for the Class</h3>
<section class="instructorlist border border-gray rounded pl-3 pr-3 pb-3">
<div class="jumbotron jumbotron-fluid">
<section/>
</div>
</div>
</div>


@endsection