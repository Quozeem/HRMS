<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Staff;
use App\Models\ApprovalStage;
use App\Models\Department;
use App\Models\Role;
use App\Models\Make_Request;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Mail;
use Illuminate\Support\Facades\Session;
use Redirect;
use validator;

class RequsetController extends Controller
{
    public function viewRequest()
    {
        $selectRequest=$this->selectRequest();
        return view('viewRequest',['selectRequest'=>$selectRequest]);
    }
    public function selectRequest()
    {
        $staffDepartment=Auth::guard('staff')->user()->department;
        $staffRole=Auth::guard('staff')->user()->role;
      $selectRequested= DB::table('approval_level')
     ->join('make_request','make_request.rank','=','approval_level.rank')
      ->join('staffs','staffs.role','=','approval_level.role')
    ->where('make_request.department','=',$staffDepartment)
     ->where('approval_level.department','=',$staffDepartment)
      ->where('approval_level.role','=',$staffRole)
        ->get();
        return $selectRequested;
    }
    public function sendrequest(Request $request)
    {
        $data=$request->all();
        Make_Request::create($data);
        session()->flash("SuccessMessage","Request sent Successfully!");
        return redirect('makeRequest');
    }
    public function index()
    {
        $selectRequest=  DB::table('request_type')
        ->get();
        $selectStaff= DB::table('staffs')
        ->get();
        return view('makeRequest',['selectStaff'=>$selectStaff,'selectRequest'=>$selectRequest]);
    }
}
