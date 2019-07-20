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


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix'=>'user', 'middleware' => 'admin'], function() {

    Route::get('/', function () {
            return view('user.pages.home');
         })->name("u_home");
    
    Route::get('/calendar', function () {
            return view('user.pages.calendar');
         })->name("u_cal");

    Route::get('/schedule','ManagerController@plList' )->name("m_schedule");

    
    Route::get("/create&d_id={d_id}", function () {
        return view('user.pages.createSch');
        })->name("m_schedule");
    
    Route::get("/monitor&d_id={d_id}", function () {
        return view('user.pages.monitor');
        })->name("m_schedule");

    Route::post('/createSchedule','ManagerController@createSchedule' )->name("m_schedule");

    Route::get('/status/','ManagerController@dstatus' )->name('status');

         //Route::post("/fitness",'ManagerController@fitness' )->name("fit_sub");

         
         
});

