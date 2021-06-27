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


<!-- for program index -->
<div class="mb-4">
    <h3 class="float-md-start">Manage Roles</h3>
    <a href="{{ route('roles.create')}}" class="btn btn-primary btn-lg float-md-end" role="button" aria-pressed="true"><i class="fas fa-plus-circle"></i> Add New Role</a>
    <section class="allprogram float-md-start">
        <!-- start container  -->
        <div class="overflow-hidden mt-3">
            <div class="row gx-5">
                <div class="col-md-12">
                    <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3  bg-gradient" id="">

                        <h5>All Roles</h5>
                        <div class="table-responsive">
                            <table class="table dbtable" id="dbtable">
                                <thead>
                                    <tr>
                                        <th scope="col">Role Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Role Permissions</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tdrole align-middle">Student</td>
                                        <td class="tddescription align-middle">To view student functions and edit his/her information. </td>
                                        <td class="tdpermissions align-middle">to create student names, permissions, edit, delete</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="tdrole align-middle">Student</td>
                                        <td class="tddescription align-middle">To view student functions and edit his/her information. </td>
                                        <td class="tdpermissions align-middle">to create student names, permissions, edit, delete</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="tdrole align-middle">Student</td>
                                        <td class="tddescription align-middle">To view student functions and edit his/her information. </td>
                                        <td class="tdpermissions align-middle">to create student names, permissions, edit, delete</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="tdrole align-middle">Student</td>
                                        <td class="tddescription align-middle">To view student functions and edit his/her information. </td>
                                        <td class="tdpermissions align-middle">to create student names, permissions, edit, delete</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="tdrole align-middle">Student</td>
                                        <td class="tddescription align-middle">To view student functions and edit his/her information. </td>
                                        <td class="tdpermissions align-middle">to create student names, permissions, edit, delete</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
            <!-- end container -->
    </section>
</div>


<script type="text/javascript" src="{{ URL::asset('js/bob_program_index.js') }}"></script>
@endsection
