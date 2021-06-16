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
    <h3 class="float-md-start">Manage Programs</h3>
    <a href="#" class="btn btn-primary btn-lg float-md-end" role="button" aria-pressed="true"><i class="fas fa-plus-circle"></i> Add New Program</a>
    <section class="allprogram float-md-start">
        <!-- start container  -->
        <div class="overflow-hidden mt-3">
            <div class="row gx-5">
                <div class="col-md-12">
                    <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3  bg-gradient" id="">

                        <h5>Recently Added</h5>
                        <div class="table-responsive recenttable">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Program Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tdimg"> <img src="http://momentousinstitute.org//assets/site/blog/classroomsetup.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">HND in Computing</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="http://momentousinstitute.org//assets/site/blog/classroomsetup.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">HND in Computing</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="http://momentousinstitute.org//assets/site/blog/classroomsetup.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">HND in Computing</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3  bg-gradient" id="">

                        <h5>All Programs</h5>
                        <div class="table-responsive">
                            <table class="table dbtable" id="dbtable">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Program Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tdimg"> <img src="http://momentousinstitute.org//assets/site/blog/classroomsetup.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">HND in Computing</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="https://www.expectmorearizona.org/wp-content/uploads/2020/07/iStock-950607874-1.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Business Major</td>
                                        <td class="tdcategory align-middle">Business</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="http://momentousinstitute.org//assets/site/blog/classroomsetup.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Digital Marketing with frontend web development</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="https://www.expectmorearizona.org/wp-content/uploads/2020/07/iStock-950607874-1.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Diploma in Human Resources</td>
                                        <td class="tdcategory align-middle">Business Management</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="http://momentousinstitute.org//assets/site/blog/classroomsetup.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Internet of Things</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="https://www.expectmorearizona.org/wp-content/uploads/2020/07/iStock-950607874-1.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Super Cloud Computing Major</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="tdimg"> <img src="http://momentousinstitute.org//assets/site/blog/classroomsetup.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">HND in Computing</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="https://www.expectmorearizona.org/wp-content/uploads/2020/07/iStock-950607874-1.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Business Major</td>
                                        <td class="tdcategory align-middle">Business</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="http://momentousinstitute.org//assets/site/blog/classroomsetup.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Digital Marketing with frontend web development</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="https://www.expectmorearizona.org/wp-content/uploads/2020/07/iStock-950607874-1.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Diploma in Human Resources</td>
                                        <td class="tdcategory align-middle">Business Management</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="http://momentousinstitute.org//assets/site/blog/classroomsetup.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Internet of Things</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="https://www.expectmorearizona.org/wp-content/uploads/2020/07/iStock-950607874-1.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Super Cloud Computing Major</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="http://momentousinstitute.org//assets/site/blog/classroomsetup.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">HND in Computing</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="https://www.expectmorearizona.org/wp-content/uploads/2020/07/iStock-950607874-1.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Business Major</td>
                                        <td class="tdcategory align-middle">Business</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="http://momentousinstitute.org//assets/site/blog/classroomsetup.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Digital Marketing with frontend web development</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="https://www.expectmorearizona.org/wp-content/uploads/2020/07/iStock-950607874-1.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Diploma in Human Resources</td>
                                        <td class="tdcategory align-middle">Business Management</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="http://momentousinstitute.org//assets/site/blog/classroomsetup.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Internet of Things</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                    <tr>
                                        <td class="tdimg"> <img src="https://www.expectmorearizona.org/wp-content/uploads/2020/07/iStock-950607874-1.jpg" class="imgcol"> </td>
                                        <td class="tdtitle align-middle">Super Cloud Computing Major</td>
                                        <td class="tdcategory align-middle">Information Technology</td>
                                        <td class="tdedit align-middle"><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        <td class="tddelete align-middle"><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="p-3 border border-gray rounded pl-3 pr-3 mb-3">
                        <label class="fs-5 fw-bold">Harry's Part</label>
                        <br />

                        <div class="custom">
                            @foreach($programs as $program)
                            <p> {{$program->program_name }} </p>
                            @endforeach

                        </div>
                    </div>
                </div>


            </div>
            <!-- end container -->
    </section>
</div>
</div>


<script type="text/javascript" src="{{ URL::asset('js/bob_program_index.js') }}"></script>
@endsection
