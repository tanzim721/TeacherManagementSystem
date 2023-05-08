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



//Teachers List.................
Route::GET('/teachers', 'TeachersController@Index')->name('teachers.view');
Route::GET('/teachers/add', 'TeachersController@Add')->name('teachers.add');
Route::POST('/teachers/store', 'TeachersController@Store')->name('teachers.store');
Route::GET('/teachers/edit/{id}', 'TeachersController@Edit')->name('teachers.edit');
Route::POST('/teachers/update/{id}', 'TeachersController@Update')->name('teachers.update');
Route::GET('/teachers/delete/{id}', 'TeachersController@Delete')->name('teachers.delete');

//Session......
Route::GET('/session', 'SessionController@Index')->name('session.view');
Route::GET('/session/add', 'SessionController@Add')->name('session.add');
Route::POST('/session/store', 'SessionController@Store')->name('session.store');
Route::GET('/session/edit/{id}', 'SessionController@Edit')->name('session.edit');
Route::POST('/session/update/{id}', 'SessionController@Update')->name('session.update');
Route::GET('/session/delete/{id}', 'SessionController@Delete')->name('session.delete');

//CT and Assignment
Route::GET('/ctandassignament', 'CTandAssignment@Index')->name('ctandassignament.view');
Route::GET('/ctandassignament/add', 'CTandAssignment@Add')->name('ctandassignament.add');
Route::POST('/ctandassignament/store', 'CTandAssignment@Store')->name('ctandassignament.store');
Route::GET('/ctandassignament/edit/{id}', 'CTandAssignment@Edit')->name('ctandassignament.edit');
Route::POST('/ctandassignament/update/{id}', 'CTandAssignment@Update')->name('ctandassignament.update');
Route::GET('/ctandassignament/delete/{id}', 'CTandAssignment@Delete')->name('ctandassignament.delete');

//Roll.........
Route::GET('/roll', 'RollController@Index')->name('roll.view');
Route::GET('/roll/add', 'RollController@Add')->name('roll.add');
Route::POST('/roll/store', 'RollController@Store')->name('roll.store');
Route::GET('/roll/edit/{id}', 'RollController@Edit')->name('roll.edit');
Route::POST('/roll/update/{id}', 'RollController@Update')->name('roll.update');
Route::GET('/roll/delete/{id}', 'RollController@Delete')->name('roll.delete');


//Course Code.........
Route::GET('/coursecode', 'CourseCodeController@Index')->name('coursecode.view');
Route::GET('/coursecode/add', 'CourseCodeController@Add')->name('coursecode.add');
Route::POST('/coursecode/store', 'CourseCodeController@Store')->name('coursecode.store');
Route::GET('/coursecode/edit/{id}', 'CourseCodeController@Edit')->name('coursecode.edit');
Route::POST('/coursecode/update/{id}', 'CourseCodeController@Update')->name('coursecode.update');
Route::GET('/coursecode/delete/{id}', 'CourseCodeController@Delete')->name('coursecode.delete');


//Students Attendance.....
Route::GET('/studentAttendance/session', 'StudentAttendanceController@Index')->name('studentAttendance.view');
Route::GET('/studentAttendance/course/{id}', 'StudentAttendanceController@Index2')->name('studentAttendance.view2');
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

