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


    Route::get('/gallery', 'GalleryController@GalleryIndex')->name('gallery.view');
    Route::get('/gallery/add', 'GalleryController@GallerAdd')->name('gallery.add');
    


