<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use App\Models\Staff;
use Illuminate\Http\Request;
use DB;
use Mail;
use Illuminate\Support\Facades\Session;
use Redirect;
use validator;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
   // protected $redirectTo = RouteServiceProvider::HOME;
  
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = RoutphpeServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     $this->middleware('guest:staff')->except('logout');
    }
   public function staffLogin(Request $request)
   {
    $log_detail=array(
        'email' =>$request->get('email'),
        'password' =>$request->get('password'),
      );
      if(Auth::guard('staff')->attempt( $log_detail,$request->filled('remember'))) {
    
      return  redirect('StaffDashboard');
      }
      else{
        Session::flash('errorMessage','INVALID LOGIN DETAILS');
        return redirect()->back();
      }
   }
  
   
}
