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

Route::get('/', 'HomeController@HomeIndex')->name('home');

Route::get('/service', 'ServiceController@ServiceIndex')->name('service.view');


// Route::prefix('gallery')->group(function(){
    Route::get('/gallery', 'GalleryController@view')->name('gallery.view');
    // Route::get('/gallery/add', 'GalleryController@add')->name('gallery.add');
// });


//Teachers Details....................
Route::get('/teachers', 'TeachersController@view')->name('teachers.view');

//Notice 
Route::get('/notice', 'NoticeController@view')->name('notice.view');
Route::get('/notice/view2', 'NoticeController@view2')->name('notice.pdf.view2');
Route::get('/notice/download{file}', 'NoticeController@Download')->name('notice.download');
Route::get('/notice/view{id}', 'NoticeController@pdfView')->name('notice.pdf.view');
