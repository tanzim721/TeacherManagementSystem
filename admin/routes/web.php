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

Route::GET('/', 'HomeController@HomeIndex');
Route::GET('/visitor', 'VisitorController@VisitorIndex')->name('visitor');

Route::GET('/services', 'ServiceController@Index')->name('services.view');
Route::GET('/services/add', 'ServiceController@Add')->name('services.add');
Route::POST('/services/store', 'ServiceController@Store')->name('services.store');
Route::GET('/services/edit/{id}', 'ServiceController@Edit')->name('services.edit');
Route::POST('/services/update/{id}', 'ServiceController@Update')->name('services.update');
Route::GET('/services/delete/{id}', 'ServiceController@Delete')->name('services.delete');
// Route::get('/getServicesData', 'ServiceController@getServicesData');

//Gallery................
Route::GET('/gallery', 'GalleryController@Index')->name('gallery.view');
Route::GET('/gallery/add', 'GalleryController@Add')->name('gallery.add');
Route::POST('/gallery/store', 'GalleryController@Store')->name('gallery.store');
Route::GET('/gallery/edit/{id}', 'GalleryController@Edit')->name('gallery.edit');
Route::POST('/gallery/update/{id}', 'GalleryController@Update')->name('gallery.update');
Route::GET('/gallery/delete/{id}', 'GalleryController@Delete')->name('gallery.delete');

//Teachers List.................
Route::GET('/teachers', 'TeachersController@Index')->name('teachers.view');
Route::GET('/teachers/add', 'TeachersController@Add')->name('teachers.add');
Route::POST('/teachers/store', 'TeachersController@Store')->name('teachers.store');
Route::GET('/teachers/edit/{id}', 'TeachersController@Edit')->name('teachers.edit');
Route::POST('/teachers/update/{id}', 'TeachersController@Update')->name('teachers.update');
Route::GET('/teachers/delete/{id}', 'TeachersController@Delete')->name('teachers.delete');

//Notice List................. 
Route::GET('/notice', 'NoticeController@Index')->name('notice.view');
Route::GET('/notice/add', 'NoticeController@Add')->name('notice.add');
Route::POST('/notice/store', 'NoticeController@Store')->name('notice.store');
// Route::POST('/notice/download{file}', 'NoticeController@Download')->name('notice.download');
Route::GET('/notice/edit/{id}', 'NoticeController@Edit')->name('notice.edit');
Route::POST('/notice/update/{id}', 'NoticeController@Update')->name('notice.update');
Route::GET('/notice/delete/{id}', 'NoticeController@Delete')->name('notice.delete');

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

