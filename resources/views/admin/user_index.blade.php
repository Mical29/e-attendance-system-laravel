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
                                @foreach($users as $user)
                                    <tr>
                                        <td class="tdtitle align-middle">{{$user->id }}</td>
                                        <td class="tdtitle align-middle">{{$user->first_name }}</td>
                                        <td class="tdtitle align-middle">{{$user->email }}</td>
                                        <td class="tdtitle align-middle">{{$user->phone }}</td>
                                        <td class="tdtitle align-middle"><img src='/images/{{$user->profile_img}}' width="200" height="50"></td>
                                        <td class="tdedit align-middle">
                                            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-outline-primary">Edit</a>
                                        </td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>
                                    @endforeach
                                    <!-- <tr>
                                        <td class="tdrole align-middle">4</td>
                                        <td class="tddescription align-middle">Ye Linn Aung</td>
                                        <td class="tdpermissions align-middle">davidgautam.1234@gmail.com</td>
                                        <td class="tdpermissions align-middle">09-123456789</td>
                                        <td class="tdpermissions align-middle">profile.png</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>    -->
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