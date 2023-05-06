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

// Route::get('/', function () {
//     return view('welcome');
// });
    
Route::get('/', 'HomeController@HomeIndex')->name('home');

//Students Attendance.....
Route::GET('/studentAttendance', 'StudentAttendanceController@Index')->name('studentAttendance.view');
Route::GET('/studentAttendance/add', 'StudentAttendanceController@Add')->name('studentAttendance.add');
Route::POST('/studentAttendance/store', 'StudentAttendanceController@Store')->name('studentAttendance.store');
Route::GET('/studentAttendance/edit/{id}', 'StudentAttendanceController@Edit')->name('studentAttendance.edit');
Route::POST('/studentAttendance/update/{id}', 'StudentAttendanceController@Update')->name('studentAttendance.update');
Route::GET('/studentAttendance/delete/{id}', 'StudentAttendanceController@Delete')->name('studentAttendance.delete');


// CT Marks 
// Route::GET('/ctmarks', 'CtMarksController@Index')->name('ctmarks.view');
// Route::GET('/ctmarks/add', 'CtMarksController@Add')->name('ctmarks.add');
// Route::POST('/ctmarks/store', 'CtMarksController@Store')->name('ctmarks.store');
// Route::GET('/ctmarks/edit/{id}', 'CtMarksController@Edit')->name('ctmarks.edit');
// Route::POST('/ctmarks/update/{id}', 'CtMarksController@Update')->name('ctmarks.update');
// Route::GET('/ctmarks/delete/{id}', 'CtMarksController@Delete')->name('ctmarks.delete');

