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
    return view('pages.admin.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/attendance-report', function(){
    return view('pages.user.attendance_report');
});
Route::get('/user-chat', function(){
    return view('pages.user.chat');
});
Route::get('/message', function(){
    return view('pages.user.message');
});

Route::get('/signin', function(){
    return view('signin');
});

Route::get('employee', function(){
    return view('pages.user.employee');
});

Route::get('notification_menu', function(){
    return view('pages.user.notification_menu');
});

Route::get('calendar', function(){
    return view('pages.user.my_calendar');
});

Route::get('task', function(){
    return view('pages.user.My_task');
});

// Menu employee page admin
Route::get('employees/add', function(){
    return view('pages.admin.employee.add_employee');
});

Route::get('edit', function(){
    return view('pages.admin.employee.edit_employee');
});

Route::get('employees', function(){
    return view('pages.admin.employee.list_employee');
});

//notifications admin
Route::get('notifications', function(){
    return view('pages.admin.notifications');
});

//chat admin
Route::get('chat', function(){
    return view('pages.admin.chat_admin');
});


