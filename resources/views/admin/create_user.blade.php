@extends('layouts.app')
@section('content')

<!-- for users create -->
<div class="mb-4">
    <h3>Add User</h3>
    <section class="userscreate">
        <form id="userRegForm" action={{ route('users.store') }} method=POST enctype="multipart/form-data">
            @csrf
            <!-- start container  -->
            <div class="overflow-hidden mt-3">
                <div class="row gx-5">
                    <div class="col-md-6">
                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3">
                            {{-- <p>
                                <label for="userrole" class="fs-5 fw-bold">Choose Role</label>
                                <br />
                                <select class="" name="userrole" id="userrole">
                                    <option selected="" disabled="">Select Role</option>
                                    <option value="smsadmin">Admin</option>
                                    <option value="smslecturer">Lecturer</option>
                                    <option value="smshr">HR</option>
                                    <option value="smsstudent">Student</option>
                                </select>
                            </p> --}}
                            <p>
                                <label for="userrole" class="fs-5 fw-bold">Choose Role</label>
                                <br />
                                <select class="" name="roles[]" id="userrole">
                                    <option selected="" disabled="">Select Role</option>
                                    @foreach($roles as $role)
                                    <option value={{$role->name}}>{{$role->name}}</option>
                                    @endforeach
                                    {{-- @foreach($roles as $role)
                                    <option value="">{{$role->name}}</option>
                                    @endforeach --}}


                                    {{-- <option value="smslecturer">Lecturer</option>
                                    <option value="smshr">HR</option>
                                    <option value="smsstudent">Student</option> --}}
                                </select>
                            </p>



                            <p>
                                <label for="joineddate" class="fs-5 fw-bold">Joined Date</label> <br />
                                <input type="date" name="joineddate" id="joineddate">
                            </p>

                            {{-- @foreach($permission as $value)
                            <p>
                                <input type="checkbox" name="permission[]" class="custom-control-input" id="{{$value -> name}}" value="{{$value -> id}}">
                            <label class="custom-control-label" for="{{$value -> name}}">{{$value -> name}}</label>
                            </p>
                            @endforeach --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3  bg-gradient" id="">

                            <p>
                                <label for="userpassword" class="fs-5 fw-bold">Create Password</label> <br />
                                <input type="password" placeholder="**********" name="userpassword " class="rounded">
                            </p>
                            <p>
                                <label for="userpasswordconfirm" class="fs-5 fw-bold">Confirm Password</label> <br />
                                <input type="password" placeholder="**********" name="userpasswordconfirm" class="rounded">
                            </p>

                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3 bg-secondary bg-gradient" id="batchcontainer">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <label for="programlist" class="fs-6 fw-bold text-light lighton" id="light">Choose Program #1</label>
                                        <br />
                                        <select class="batinput bplist" name="programlist" id="programlist" disabled>
                                            <option selected="" disabled="">Select Program</option>
                                            @foreach($programs as $program)
                                            <option value={{$program->program_name}}>{{$program->program_name}}</option>
                                            @endforeach
                                        </select>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <label for="batchlist" class="fs-6 fw-bold text-light lighton" id="light">Choose Batch #1</label>
                                        <br />
                                        <select class="batinput bplist" name="batchlist" id="batchlist" disabled>
                                            <option selected="" disabled="">Select Batch</option>
                                            <option value="batch1">Batch 1</option>
                                            <option value="batch2">Batch 2</option>
                                            <option value="batch3">Batch 3</option>
                                            <option value="batch4">Batch 4</option>
                                        </select>
                                    </p>
                                </div>
                            </div>

                            <div class="row pbbox">
                                <div class="col-md-12">
                                    <label for="pb" class="fs-6 fw-bold text-light lighton" id="light">Action</label>
                                    <br />
                                    <button class="addpb" disabled>Add new program</button>
                                    <button class="removepb" disabled>Remove recent program</button>
                                </div>
                            </div>

                            <input type="hidden" value="1" id="total_count">

                            {{-- <div class="row">
                                <div class="col-md-4">
                                    <p>
                                        <label for="programlist" class="fs-6 fw-bold text-light lighton" id="light">Choose Program</label>
                                        <br />
                                        <select class="batinput bplist" name="programlist" id="programlist" disabled>
                                            <option selected="" disabled="">Select Program</option>
                                            <option value="program1">Program 1</option>
                                            <option value="program2">Program 2</option>
                                            <option value="program3">Program 3</option>
                                            <option value="program4">Program 4</option>
                                        </select>
                                    </p>
                                </div>
                                <div class="col-md-4" id="newchq">
                                    <p>
                                        <label for="batchlist" class="fs-6 fw-bold text-light lighton" id="light">Choose Batch</label>
                                        <br />
                                        <select class="batinput bplist" name="batchlist" id="batchlist" disabled>
                                            <option selected="" disabled="">Select Batch</option>
                                            <option value="batch1">Batch 1</option>
                                            <option value="batch2">Batch 2</option>
                                            <option value="batch3">Batch 3</option>
                                            <option value="batch4">Batch 4</option>
                                        </select>
                                    </p>
                                </div>
                                <div class="col-md-4 ">
                                    <label for="pb" class="fs-6 fw-bold text-light lighton" id="light">Action</label>
                                    <br />
                                    <button class="addpb" disabled>Add new</button>
                                    <button class="removepb" disabled>Remove this</button>
                                </div>
                            </div> --}}
                        </div>
                    </div>


                    <div class="col-md-12 mt-3">
                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3">
                            <label for="personalinfo" class="fs-5 fw-bold">Personal Info</label>
                            <div class="row">
                                <div class="col-md-4 profile_same_height">
                                    <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3 profile_same_height">
                                        <p>
                                            <label for="contactdetails" class="fs-6 fw-bold text-primary">Personal Details</label><br />
                                            <img id="profilepreview" src="https://widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-4.png" alt="profile image" /> <br />
                                            <input accept="image/*" type='file' id="profileimg" name="profileimg" class="form-control mt-3" />
                                        </p>
                                        <p>
                                            <input placeholder="First Name" name="profilefirstname " class="rounded">
                                        </p>
                                        <p>
                                            <input placeholder="Last Name" name="profilelastname " class="rounded">
                                        </p>
                                        <p>
                                            <label for="usergender" class="text-muted">Gender</label> <br />
                                            <input type="radio" class="allergic" name="usergender" checked="checked" value="ugm" />
                                            <label for="pcyes" class="pr-2">Male</label>
                                            <input type="radio" class="allergic" name="usergender" value="ugf" />
                                            <label for="pcno">Female</label>
                                        </p>
                                        <p>
                                            <label for="dob" class="text-muted">Date of Birth</label> <br />
                                            <input type="date" name="dob" id="dob">
                                        </p>

                                        {{-- <p>
                                            <textarea id="profiledescription" name="profiledescription" rows="4" placeholder="Description " class="rounded"></textarea>
                                        </p> --}}



                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3 profile_same_height">
                                        <p>
                                            <label for="contactdetails" class="fs-6 fw-bold text-primary">Contact Details</label><br />
                                            <input type="email" name="profileemail" id="profileemail" placeholder="Email">
                                        </p>
                                        <p>
                                            <input type="number" name="profilephone" id="profilephone" placeholder="Phone">
                                        </p>
                                        <p>
                                            <select class="" name="userregion" id="userregion">
                                                <option selected="" disabled="">Select Region</option>
                                                <option value="ayy">Ayeyarwady</option>
                                                <option value="bgo">Bago</option>
                                                <option value="chn">Chin</option>
                                                <option value="kcn">Kachin</option>
                                                <option value="kyh">Kayah</option>
                                                <option value="kyn">Kayin</option>
                                                <option value="mdy">Mandalay</option>
                                                <option value="mgy">Magway</option>
                                                <option value="mon">Mon</option>
                                                <option value="rke">Rakhine</option>
                                                <option value="sgg">Sagaing</option>
                                                <option value="shn">Shan</option>
                                                <option value="tni">Tanintharyi</option>
                                                <option value="ygn">Yangon</option>
                                            </select>
                                        </p>
                                        <p>
                                            <input placeholder="Postal Code" name="postcode" class="rounded">
                                        </p>
                                        <p>
                                            <textarea id="profileaddress" name="profileaddress" rows="4" placeholder="Address Detail" class="rounded"></textarea>
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3 profile_same_height">
                                        <p>
                                            <label for="socialplatforms" class="fs-6 fw-bold text-primary">Social Platforms (Optional)</label><br />
                                            <input type="text" name="facebook" id="facebook" placeholder="Facebook">
                                        </p>
                                        <p>
                                            <input type="text" name="linkedin" id="linkedin" placeholder="Linkedin">
                                        </p>
                                        <p>
                                            <input type="text" name="viber" id="viber" placeholder="Viber">
                                        </p>
                                        <p>
                                            <input type="text" name="skype" id="skype" placeholder="Skype">
                                        </p>
                                        <p>
                                            <input type="text" name="website" id="website" placeholder="Personal Website">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 mt-3">
                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3">
                            <label for="guardianinfo" class="fs-5 fw-bold">Guardian Info</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3 profile_same_height">
                                        <p>
                                            <label for="guardiandetails" class="fs-6 fw-bold text-primary">Guardian #1 Contact Details</label><br />
                                            <img id="guardianfirstpreview" src="https://www.celebritycontactdetails.com/wp-content/uploads/2018/09/Actress-Deepika-Padukone-300x295.jpg" alt="guardian image" /> <br />
                                            <input accept="image/*" type='file' id="guardianfirstimg" name="guardianfirstimg" class="form-control mt-3" />
                                        </p>
                                        <p>
                                            <input placeholder="Guardian #1 Name" name="guardianname " class="rounded">
                                        </p>
                                        <p>
                                            <label for="relationship" class="text-muted">Relationship with user</label> <br />

                                            <input type="radio" class="targetfirstrs" name="relationship" checked="checked" value="parent" />
                                            <label for="rsparent" class="pr-2">Parent</label>

                                            <input type="radio" class="targetfirstrs" name="relationship" value="sibling" />
                                            <label for="rsparent" class="pr-2">Sibling</label>

                                            <input type="radio" class="targetfirstrs" name="relationship" value="spouse" />
                                            <label for="rsspouse" class="pr-2">Spouse</label>

                                            <input type="radio" class="targetfirstrs" name="relationship" value="other" />
                                            <label for="rsother" class="pr-2">Other</label>
                                            <input style="display:none;" type="text" name="relationship" id="otherAnswer" placeholder="Uncle/ Aunt/ Grandmother etc..." />
                                        </p>
                                        <p>
                                            <input type="email" name="guardianemail" id="guardianemail" placeholder="Guardian #1 Email">
                                        </p>
                                        <p>
                                            <input type="number" name="guardiaphone" id="guardiaphone" placeholder="Guardian #1 Phone">
                                        </p>
                                        <p>
                                            <textarea id="guardianaddress" name="guardianaddress" rows="4" placeholder="Guardian #1 Address" class="rounded"></textarea>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3 profile_same_height">
                                        <p>
                                            <label for="guardiandetails" class="fs-6 fw-bold text-primary">Guardian #2 Contact Details</label><br />
                                            <img id="guardiansecpreview" src="https://filmfare.wwmindia.com/content/2020/oct/ranveersingh11602233648.jpg" alt="second guardian image" /> <br />
                                            <input accept="image/*" type='file' id="guardiansecimg" name="secguardiansecimg" class="form-control mt-3" />
                                        </p>
                                        <p>
                                            <input placeholder="Guardian #2 Name" name="secguardianname " class="rounded">
                                        </p>
                                        <p class="targetrs">
                                            <label for="secrelationship" class="text-muted">Relationship with user</label> <br />

                                            <input type="radio" class="targetsecrs" name="secrelationship" checked="checked" value="secparent" />
                                            <label for="secrsparent" class="pr-2">Parent</label>

                                            <input type="radio" class="targetsecrs" name="secrelationship" value="secsibling" />
                                            <label for="secrsparent" class="pr-2">Sibling</label>

                                            <input type="radio" class="targetsecrs" name="secrelationship" value="secspouse" />
                                            <label for="secrsspouse" class="pr-2">Spouse</label>

                                            <input type="radio" class="targetsecrs" name="secrelationship" value="secother" />
                                            <label for="secrsother" class="pr-2">Other</label>
                                            <input style="display:none;" type="text" name="secrelationship" id="secOtherAnswer" placeholder="Uncle/ Aunt/ Grandmother etc..." />

                                        </p>
                                        <p>
                                            <input type="email" name="secguardianemail" id="secguardianemail" placeholder="Guardian #2 Email">
                                        </p>
                                        <p>
                                            <input type="number" name="secguardiaphone" id="secguardiaphone" placeholder="Guardian #2 Phone">
                                        </p>
                                        <p>
                                            <textarea id="secguardianaddress" name="secguardianaddress" rows="4" placeholder="Guardian #2 Address" class="rounded"></textarea>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3">
                            <p>
                                <label for="healthinfo" class="fs-5 fw-bold pr-3">Health Info</label>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3 profile_same_height">
                                        <p>
                                            <label for="medicaltreatment" class="fs-6 text-primary fw-bolder">Is user currently under medical treatment?</label> <br />
                                            <input type="radio" class="medicaltreatment" name="medicaltreatment" checked="checked" value="mtyes" />
                                            <label for="mtyes" class="pr-2">Yes</label>
                                            <input type="radio" class="medicaltreatment" name="medicaltreatment" value="mtno" />
                                            <label for="mtno">No</label>
                                        </p>
                                        <p>
                                            <label for="medicaltreatmentyes" class="fs-6 text-muted fw-bold">If yes, give the doctor's name and phone number and the nature of the treatment.</label>
                                        </p>
                                        <p>
                                            <input type="text" name="doctorname" id="doctorname" placeholder="Doctor Name">
                                        </p>
                                        <p>
                                            <input type="number" name="doctorphone" id="doctorphone" placeholder="Doctor Phone Number">
                                        </p>
                                        <p>
                                            <textarea id="natureoftreatment" name="natureoftreatment" rows="4" placeholder="Nature of Treatment" class="rounded"></textarea>
                                        </p>
                                        <hr>
                                        <p>
                                            <label for="allergic" class="fs-6 text-primary fw-bolder">Is the user allergic?</label> <br />
                                            <input type="radio" class="allergic" name="allergic" checked="checked" value="alyes" />
                                            <label for="alyes" class="pr-2">Yes</label>
                                            <input type="radio" class="allergic" name="allergic" value="alno" />
                                            <label for="alno">No</label>
                                        </p>
                                        <p>
                                            <label for="allergicyes" class="fs-6 text-muted fw-bold">If yes, please list all allergies:</label> <br />
                                            <textarea id="natureoftreatment" name="natureoftreatment" rows="4" placeholder="List of Allgeries" class="rounded"></textarea>
                                        </p>
                                        <p>
                                            <label for="anaphylactic" class="fs-6 text-muted fw-bold">If yes, have any of these allergies cause an anaphylactic reaction?</label> <br />
                                            <input type="radio" class="anaphylactic" name="anaphylactic" checked="checked" value="aplyes" />
                                            <label for="aplyes" class="pr-2">Yes</label>
                                            <input type="radio" class="anaphylactic" name="anaphylactic" value="aplno" />
                                            <label for="aplno">No</label>
                                        </p>
                                        <p>
                                            <label for="epipen" class="fs-6 text-muted fw-bold">If yes, does the student carry an epi-pen? (Must include on Medical Record)</label> <br />
                                            <input type="radio" class="epipen" name="epipen" checked="checked" value="eppyes" />
                                            <label for="eppyes" class="pr-2">Yes</label>
                                            <input type="radio" class="epipen" name="epipen" value="eppno" />
                                            <label for="eppno">No</label>
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3 profile_same_height">
                                        <p>
                                            <label for="physicalcondition" class="fs-6 text-primary fw-bolder">Does the user have any physical condition(s) which we ought to know about in case of emergency?</label> <br />
                                            <input type="radio" class="allergic" name="physicalcondition" checked="checked" value="pcyes" />
                                            <label for="pcyes" class="pr-2">Yes</label>
                                            <input type="radio" class="allergic" name="physicalcondition" value="pcno" />
                                            <label for="pcno">No</label>
                                        </p>
                                        <p>
                                            <label for="physicalconditionyes" class="fs-6 text-muted fw-bold">If yes, plase specify:</label> <br />
                                            <textarea id="physicalconditionyes" name="physicalconditionyes" rows="4" placeholder="Tell us how to do in case of emergency" class="rounded"></textarea>
                                        </p>

                                        <hr />

                                        <p>
                                            <label for="healthinsurance" class="fs-6 text-primary fw-bolder">Health Insurance Contact Details</label> <br />
                                            <input type="text" name="healthinsurancename" placeholder="Health Insurance Name" />
                                        </p>
                                        <p>
                                            <input type="number" name="healthinsurancephone" placeholder="Health Insurance Phone Number" />
                                        </p>
                                        <p>
                                            <textarea id="physicalconditionyes" name="physicalconditionyes" rows="4" placeholder="Health Insurance Address" class="rounded"></textarea>
                                        </p>
                                        <hr />
                                        <p>
                                            <label for="medicalrecordfile" class="fs-6 text-primary fw-bolder">Upload Medical Record File Here (Only PDF or MS Word File is allowed)</label> <br />
                                            <input accept="application/pdf, application/msword" type="file" class="form-control mt-3" id="medicalreport" name="medicalrecordfile" />
                                        </p>
                                    </div>
                                </div>
                            </div>
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

<script type="text/javascript" src="{{ URL::asset('js/bob_user_create.js') }}"></script>
@endsection
