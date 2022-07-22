<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Staff;
use App\Models\Department;
use App\Models\Role;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Mail;
use Illuminate\Support\Facades\Session;
use Redirect;
use validator;

class StaffController extends Controller
{
    public $fetchtDepartment;
   public function addnewstaff(Request $request)
   {
      $data=$request->all();
      $data['password']=Hash::make($data['password']);
      if($images= $request->file('file')) {
        $destinationpath='staff_Image/';
         $profileimage = $images->getClientOriginalName();
         $images->move($destinationpath,$profileimage);
        $data['file']=$profileimage;
     }
      Staff::create($data);
      session()->flash("SuccessMessage","Staff added Successfully!");
      return redirect('addstaff');
   }
   public function adminDashboard()
   {
    return view('Admin.admin');
   }
   public function delectstaff(Request $request)
   {
    if($request->staff_id)
    {
        
        DB::table('staffs')
        ->where('id','=',$request->staff_id)
        ->delete();
        session()->flash("SuccessMessage","Delected Successfully!");
        return redirect('addstaff');
   }
}
   public function updateStaff(Request $request)
   {
    $data=([
        'name'=>$request->name,
        'email'=>$request->email,
        'role'=>$request->role,
        'department'=>$request->department,
    ]);

    if($request->staff_id)
    {
        DB::table('staffs')
        ->where('id','=',$request->staff_id)
        ->update( $data);
        session()->flash("SuccessMessage","Updated Successfully!");
        return redirect('addstaff');
    }
   }
   public function selectStaff()
   {
    $selectStaff= DB::table('staffs')
    ->get();
    return $selectStaff;
   }
   public function addrole()
   {
    $fetchtrole=$this->selectRole();
    return view('Admin.addRole',['selectRole' => $fetchtrole]);
   }
   public function addstaff()
   {
    $selectStaff=$this->selectStaff();
    $fetchtrole=$this->selectRole();
    $this->fetchtDepartment=$this->selectDepartment();
    return view('Admin.addStaff',['selectDepartment' => $this->fetchtDepartment,'selectStaff'=>$selectStaff,'selectRole'=>$fetchtrole]);
   }
   public function userlogout()
   {
    Auth::guard('staff')->logout();
    return redirect('/');
   }
   public function update_department(Request $request)
   {
    if($request->department_id)
    {
        DB::table('department')
        ->where('id','=',$request->department_id)
        ->update(['department'=>$request->department]);
        session()->flash("SuccessMessage","Updated Successfully!");
        return redirect('addDepartment');
    }
   }
   public function delectDepartment(Request $request)
   {
    if($request->id)
    {
        
        DB::table('department')
        ->where('id','=',$request->id)
        ->delete();
        session()->flash("SuccessMessage","Delected Successfully!");
        return redirect('addDepartment');
   }
}

   public function delectRole(Request $request)
   {
    if($request->id)
    {
        
        DB::table('role')
        ->where('id','=',$request->id)
        ->delete();
        session()->flash("SuccessMessage","Delected Successfully!");
        return redirect('addrole');
   }
}
   public function update_role(Request $request)
   {
    if($request->role_id)
    {
        DB::table('role')
        ->where('id','=',$request->role_id)
        ->update(['role'=>$request->role]);
        session()->flash("SuccessMessage","Updated Successfully!");
        return redirect('addrole');
    }
   }
   public function addDepartment()
   {
    $this->fetchtDepartment=$this->selectDepartment();
    return view('Admin.addDepartment',['selectDepartment' =>   $this->fetchtDepartment]);
   }
   public function selectDepartment()
   {
   $selectDepartment= DB::table('department')
    ->get();
    return $selectDepartment;
   }
   public function selectRole()
   {
   $selectrole= DB::table('role')
    ->get();
    return $selectrole;
   }

   public function insertDepartment(Request $request)
   {
      $data= $request->all();
      Department::create($data);
     session()->flash("SuccessMessage","Department added Successfully!");
     return redirect('addDepartment');
   }
 
   public function insertRole(Request $request)
   {
      $data= $request->all();
      Role::create($data);
     session()->flash("SuccessMessage","Role added Successfully!");
     return redirect('addrole');
   }
 
   

}
