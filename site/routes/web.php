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

Route::get('/', 'HomeController@HomeIndex');

Route::get('/service', 'ServiceController@ServiceIndex')->name('service.view');


// Route::prefix('gallery')->group(function(){
    Route::get('/gallery', 'GalleryController@view')->name('gallery.view');
    // Route::get('/gallery/add', 'GalleryController@add')->name('gallery.add');
// });


//Teachers Details....................
Route::get('/teachers', 'TeachersController@view')->name('teachers.view');


///
