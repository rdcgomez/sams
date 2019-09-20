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
})->name('root');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');



Route::middleware('student')->group(function() {

  Route::resource('/student', 'StudentsController');
  
});

Route::middleware('d.o')->group(function() {

  Route::resource('/do', 'DisciplinaryOfficersController');
  
});

Route::middleware('g.c')->group(function() {

  Route::resource('/gc', 'GuidanceCounselorsController');
  
});

Route::middleware('teacher')->group(function() {

  Route::resource('/teacher', 'TeachersController');
  
});

Route::middleware('receptionist')->group(function() {

  Route::resource('/receptionist', 'ReceptionistsController');
  
  Route::get('/receptionist/show', 'ReceptionistsController@list')->name('receptionist.list'); 
  
});

Route::get('qr-code-g', function () {
  QrCode::size(500)
            ->format('png')
            ->generate('ItSolutionStuff.com', public_path('img/qrcode.png'));
    
  return view('qrCode');
})->name('scan.qr');


