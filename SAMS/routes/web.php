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
// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/', function () {
  return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index');

Route::middleware('student')->group(function() {

  Route::resource('/student', 'StudentsController');
  
});

// Route::group(['middleware' => 'student', 'prefix' => 'student'], function () {

//   // Route::resource('/student', 'StudentsController');
//   return "working middleware";
// });

Route::group(['middleware' => 'd.o', 'prefix' => 'd.o'], function () {

  Route::resource('/do', 'DisciplinaryOfficersController');

});

// Route::group(['middleware' => 'g.c', 'prefix' => 'g.c'], function () {

//   Route::resource('/home', 'GuidanceCounselorsController')->name('gc');

// });

// Route::group(['middleware' => 'teacher', 'prefix' => 'teacher'], function () {

//   Route::resource('/home', 'TeachersController')->name('teacher');

// });

// Route::group(['middleware' => 'receptionist', 'prefix' => 'receptionist'], function () {

//   Route::resource('/home', 'ReceptionistsController')->name('receptionist');

// });