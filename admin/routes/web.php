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
    
Route::get('/', 'HomeController@HomeIndex');
Route::get('/visitor', 'VisitorController@VisitorIndex')->name('visitor');

    Route::get('/service', 'ServiceController@ServiceIndex')->name('service.view');
    Route::get('/service/add', 'ServiceController@ServiceIndex')->name('service.add');
    Route::post('/service/delete', 'ServiceController@ServiceDelete')->name('service.delete');
Route::get('/getServicesData', 'ServiceController@getServicesData');

//Gallery................
Route::get('/gallery', 'GalleryController@GalleryIndex')->name('gallery.view');
Route::get('/gallery/add', 'GalleryController@GalleryAdd')->name('gallery.add');
Route::post('/gallery/store', 'GalleryController@GalleryStore')->name('gallery.store');
Route::get('/gallery/edit/{id}', 'GalleryController@GalleryEdit')->name('gallery.edit');
Route::post('/gallery/update/{id}', 'GalleryController@GalleryUpdate')->name('gallery.update');
Route::post('/gallery/delete/{id}', 'GalleryController@GalleryDelete')->name('gallery.delete');

//Teachers List.................
Route::get('/teachers', 'TeachersController@Index')->name('teachers.view');
Route::get('/teachers/add', 'TeachersController@Add')->name('teachers.add');
Route::post('/teachers/store', 'TeachersController@Store')->name('teachers.store');
Route::get('/teachers/edit/{id}', 'TeachersController@Edit')->name('teachers.edit');
Route::post('/teachers/update/{id}', 'TeachersController@Update')->name('teachers.update');
Route::post('/teachers/delete/{id}', 'TeachersController@Delete')->name('teachers.delete');


    
