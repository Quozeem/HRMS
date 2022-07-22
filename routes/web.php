<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
//login staff
Route::group(['namespace'=>'Auth'], function(){
  Route::post('/',"LoginController@staffLogin")->name('staffLogin');
});
//staff dashboard

Route::get('/userlogout',"StaffController@userlogout")->name('userlogout');
Route::group(['middleware'=>'staff'],function(){

  Route::get('/stage',"ApproveController@stage");
  Route::post('/stage',"ApproveController@insertlevel")->name('insertlevel');

  Route::post('/requesttype',"ApproveController@insertRequest")->name('insertRequest');
  Route::get('/requesttype',"ApproveController@requesttype");

 Route::post('/approvalReq',"ApproveController@insertapproval");
 Route::get('/approvalReq',"ApproveController@approvalReq");

Route::get('viewRequest',"RequsetController@viewRequest");

 Route::get('/makeRequest',"RequsetController@index");
 Route::post('/makeRequest',"RequsetController@sendrequest")->name('sendrequest');
 
 Route::get('/addstaff',"StaffController@addstaff");
  Route::post('/addstaff',"StaffController@addnewstaff")->name('addSTAFF');
Route::post('/delectstaff',"StaffController@delectstaff");
Route::post('/updateStaff',"StaffController@updateStaff");

  Route::post('/delect_role',"StaffController@delectRole");
  Route::post('/update_role',"StaffController@update_role");
  Route::get('/addrole',"StaffController@addrole");
  Route::post('/addrole',"StaffController@insertRole")->name('insertRole');

  Route::post('/delect_department',"StaffController@delectDepartment");
Route::post('/update_department',"StaffController@update_department");
Route::post('/addDepartment',"StaffController@insertDepartment")->name('insertDepartment');
Route::get('/addDepartment',"StaffController@addDepartment");

Route::get('/StaffDashboard',"StaffController@adminDashboard");
});

  Route::get('/',function () {
   
    return view('welcome');
   
  });
  
