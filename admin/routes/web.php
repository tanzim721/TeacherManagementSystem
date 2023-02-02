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
Route::post('/serviceDelete', 'ServiceController@ServiceDelete')->name('service.delete');


Route::get('/getServicesData', 'ServiceController@getServicesData');



