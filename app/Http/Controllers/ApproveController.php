<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Staff;
use App\Models\ApprovalStage;
use App\Models\Level;
use App\Models\RequestType;
use App\Models\Department;
use App\Models\Role;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Mail;
use Illuminate\Support\Facades\Session;
use Redirect;
use validator;

class ApproveController extends Controller
{
    public function stage()
    {
        $selectlevel=$this->selectlevel();
        return view('level',['selectlevel'=>$selectlevel]);
    }
    public function insertlevel(Request $request)
    { 
      $level= DB::table('level')->get();
      if($level->count() >= 1)
      {
      DB::table('level')
 ->where('id','!=',null)
    ->update(['level'=> $request->level]);
        session()->flash("SuccessMessage","Stage Request Updated Successfully!");
        return redirect('stage');
      }
      else{
        $data=$request->all();
        Level::create($data);
        session()->flash("SuccessMessage","Stage Request added Successfully!");
        return redirect('stage');
      }
       
    }
    
    public function selectlevel()
    {
      $selectlevels= DB::table('level')
        ->first();
        if( $selectlevels != null)
        {
      $selectlevel= $selectlevels->level;
        return $selectlevel;
        }
        return '';
    }
    public function selectRequest()
    {
      $selectRequest=  DB::table('request_type')
        ->get();
        return $selectRequest;
    }
    public function insertRequest(Request $request)
    {
        $data=$request->all();
        RequestType::create($data);
        session()->flash("SuccessMessage","Request added Successfully!");
        return redirect('requesttype');
    }
    public function requesttype()
    {
        $selectRequest=$this->selectRequest();
        return view('request',['selectRequest'=>$selectRequest]);
    }
    public function insertapproval(Request $request)
    {
        $data=$request->all();
        ApprovalStage::create($data);
        session()->flash("SuccessMessage","Request Approval assigned Successfully!");
        return redirect('approvalReq');
    }
    public function selectapproval()
    {
        $selectapproval=  DB::table('approval_level')
        ->get();
        return $selectapproval;
    }
   public function approvalReq()
   {
    $selectDepartment= DB::table('department')
    ->get();
    $selectrole= DB::table('role')
    ->get();
    $selectlevel=$this->selectlevel();
    $selectapproval=$this->selectapproval();
    $selectRequest=$this->selectRequest();
    return view('approvalReq',['selectlevel'=>$selectlevel,'selectDepartment'=>$selectDepartment,'selectRole'=>$selectrole,
    'selectapproval'=>$selectapproval,'selectRequest'=>$selectRequest]);
   }
}
