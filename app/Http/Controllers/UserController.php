<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Program;
use DB;

use Illuminate\Support\Arr;

class UserController extends Controller
{
    //

    public function index(Request $request){
        $data = User::orderBy('id','DESC');
        return view('admin.user_index',compact('data'));
    }

    public function create(){
        $roles = Role::all();
        $programs = Program::all();// Not Program it will be course
        $context=[
            'roles'=>$roles,
            'programs' => $programs
        ];
        return view('admin/create_user',$context);
    }

    public function store(){
        // $this->validate($request, [
        //     'name '=> 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'password ' => 'required|same:userpasswordconfirm',
        //     'roles' => 'required'
        // ]);
        $user = new User();
        $user->name = request('profilefirstname');
        $user->email = request('profileemail');
        $user->password = Hash::make(request('userpassword'));
        $user->gender = request('usergender');
        $user->date_of_birth = request('dob');       

        $user->courses = request('');// Need To Check
        $user->phone = request('profilephone');
        $user->region = request('userregion');
        $user->postal_code = request('postcode');
        $user->address_detail = request('profileaddress');
        $user->facebook = request('facebook');
        $user->linkedin = request('linkedin');
        $user->skype = request('skype');
        $user->personal_website = request('website');

        $destinationImgPath = public_path().'/images';

        $user->gurdian_img = request('guardianfirstimg')->getClientOriginalName();
        $user->profile_img = request('progileimg')->getClientOriginalName();
        
        $imgName = request('guardianfirstimg')->getClientOriginalName();
        $profileImgName = request('progileimg')->getClientOriginalName();

        request('guardianfirstimg')->move($destinationImgPath,$imgName);
        request('progileimg')->move($destinationImgPath,$profileImgName);
      

        $user->gurdian_name = request('guardianname');
        $user->relationship = request('relationship');
        $user->gurdian_email = request('guardianemail');
        $user->gurdian_phone = request('guardiaphone');
        $user->gurdian_address = request('guardianaddress');

        $user->current_medical_treatment = request('medicaltreatment');
        $user->doctor_name = request('doctorname');
        // $user->doctor_phone= request('doctorphone');
        $user->nature_of_treatment = request('natureoftreatment');
        $user->is_allergic= request('allergic');
        $user->anaphylactic_reaction = request('anaphylactic');
        $user->epi_pens = request('epipen');
        $user->physical_condition = request('physicalcondition');
        $user->specify_physical_condition = request('physicalconditionyes');
        $user->health_insurance_name = request('healthinsurancename');
        $user->health_insurance_phone = request('healthinsurancephone');
        $user->health_insurance_address = request('healthinsuranceaddress'); // Need to Change in View

        $destinationPath = public_path().'/files';
        $user->medical_record  = request('medicalrecordfile')->getClientOriginalName();
     
        $fileName = request('medicalrecordfile')->getClientOriginalName();

        request('medicalrecordfile')->move($destinationPath,$fileName);
        $user->save();        

        $user->assignRole(request('roles'));// Assign Roles
        
        echo("Successfully Saved :)");
        return redirect()->route('users.index')->with('success','User created successfully :)');
    }

    public function destroy(){
        
    }
}
