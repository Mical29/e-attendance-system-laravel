@extends('layouts.app')
@section('content')
<div class="table-responsive">
                            <table class="table dbtable" id="dbtable">
                                <thead>
                                    <tr>
                                        <th scope="col">User Id</th>
                                        <th scope="col">FirstName</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">PhoneNumber</th>
                                        <th scope="col">Profile Image</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tdrole align-middle">1</td>
                                        <td class="tddescription align-middle">Ye Linn Aung</td>
                                        <td class="tdpermissions align-middle">davidgautam.1234@gmail.com</td>
                                        <td class="tdpermissions align-middle">09-123456789</td>
                                        <td class="tdpermissions align-middle">profile.png</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr> 
                                    <tr>
                                        <td class="tdrole align-middle">2</td>
                                        <td class="tddescription align-middle">Ye Linn Aung</td>
                                        <td class="tdpermissions align-middle">davidgautam.1234@gmail.com</td>
                                        <td class="tdpermissions align-middle">09-123456789</td>
                                        <td class="tdpermissions align-middle">profile.png</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>  
                                    <tr>
                                        <td class="tdrole align-middle">3</td>
                                        <td class="tddescription align-middle">Ye Linn Aung</td>
                                        <td class="tdpermissions align-middle">davidgautam.1234@gmail.com</td>
                                        <td class="tdpermissions align-middle">09-123456789</td>
                                        <td class="tdpermissions align-middle">profile.png</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="tdrole align-middle">4</td>
                                        <td class="tddescription align-middle">Ye Linn Aung</td>
                                        <td class="tdpermissions align-middle">davidgautam.1234@gmail.com</td>
                                        <td class="tdpermissions align-middle">09-123456789</td>
                                        <td class="tdpermissions align-middle">profile.png</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>   
                                </tbody>
                            </table>

                        </div>
<!-- User id
Firstname 
Email 
PhoneNumber 
Profile Image -->
<script type="text/javascript" src="{{ URL::asset('js/bob_program_index.js') }}"></script>
@endsection