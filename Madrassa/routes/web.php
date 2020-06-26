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



//Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(array('middleware'=>'auth','namespace'=>'Admin'),
function(){

Route::get('/','DashboardController@index');

Route::resource('dashboard','DashboardController');
Route::resource('courses','CourseController');
Route::resource('students','StudentController');
Route::resource('slides','SlideController');
Route::resource('payments','PaymentController');

});













