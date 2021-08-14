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

Route::get('/', function () {
    return view('index');
});

Route::get('/admin_designation', function () {
    return view('Dashboard/dashboard-employee-designation');
});
Route::get('/user_designation', function () {
    return view('Dashboard/dashboard-user-designation');
});
Route::get('/guard_designation', function () {
    return view('Dashboard/dashboard-guard-designation');
});



Route::get('/users_list', function () {
    return view('Dashboard/dashboard-users-list');
});
Route::get('/add_user', function () {
    return view('Dashboard/dashboard-add-user');
});
Route::get('/account_setting', function () {
    return view('Dashboard/dashboard-accountsettings');
});
Route::get('/general_setting', function () {
    return view('Dashboard/dashboard-generalsettings');
});
Route::get('/notification_setting', function () {
    return view('Dashboard/dashboard-notificationsettings');
});
Route::get('/languages', function () {
    return view('Dashboard/dashboard-languages');
});
Route::get('/english_language_status', function () {
    return view('Dashboard/dashboard-english-status');
});
Route::get('/martial_status', function () {
    return view('Dashboard/dashboard-martial-status');
});
Route::get('/blood_group', function () {
    return view('Dashboard/dashboard-blood-group');
});