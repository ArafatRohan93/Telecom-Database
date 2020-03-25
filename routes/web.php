<?php

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

Route::get('/', function () {
    return view('home1');
});
Route::post('/', function () {
    return view('home1');
});
Route::post('/erd', function () {
    return view('/erd');
});
Route::post('/welcome', function () {
    return view('welcome');
});
Route::post('/connect', function () {
    return view('/connect');
});
Route::post('/adminlogin', function () {
    return view('/adminlogin');
});
Route::post('/userlogin', function () {
    return view('/userlogin');
});
Route::post('/availablepacktab', function () {
    return view('/availablepacktab');
});
Route::post('/userhome', function () {
    return view('/userhome');
});
Route::post('/userhome1', function () {
    return view('/userhome1');
});
Route::post('/adminhome', function () {
    return view('/adminhome');
});
Route::post('/adminhome1', function () {
    return view('/adminhome1');
});
Route::post('/createtable', function () {
    return view('/createtable');
});
Route::post('/insertdata', function () {
    return view('/insertdata');
});

Route::post('/insert_user_action', function () {
    return view('/insert_user_action');
});
Route::post('/insert_user_status_form', function () {
    return view('/insert_user_status_form');
});
Route::post('/insert_user_status_action', function () {
    return view('/insert_user_status_action');
});

Route::post('/insert_data_packs_form', function () {
    return view('/insert_data_packs_form');
});

Route::post('/insert_data_packs_action', function () {
    return view('/insert_data_packs_action');
});
Route::post('/insert_call_packs_form', function () {
    return view('/insert_call_packs_form');
});

Route::post('/insert_call_packs_action', function () {
    return view('/insert_call_packs_action');
});
Route::post('/insert_sms_packs_form', function () {
    return view('/insert_sms_packs_form');
});

Route::post('/insert_sms_packs_action', function () {
    return view('/insert_sms_packs_action');
});
Route::post('/insert_calls_form', function () {
    return view('/insert_calls_form');
});

Route::post('/insert_calls_action', function () {
    return view('/insert_calls_action');
});
Route::post('/insert_sms_form', function () {
    return view('/insert_sms_form');
});

Route::post('/insert_sms_action', function () {
    return view('/insert_sms_action');
  });
Route::post('/setop', function () {
    return view('/setop');
});
Route::post('/subquery', function () {
    return view('/subquery');
});
Route::post('/showalltab', function () {
    return view('/showalltab');
});
Route::post('/aggrigateExample', function () {
    return view('/aggrigateExample');
});
Route::post('/joinExample', function () {
    return view('/joinExample');
});
Route::post('/function', function () {
    return view('/function');
});
Route::post('/procedure', function () {
    $user_condition = DB::select("CALL `user_condition`(); ");
    return view('/procedure',['user_condition'=>$user_condition]);
});

//Route::post('','ConnectController@connect');
