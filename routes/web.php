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
Route::get('/login', function(){
    return view('login')->name('login');
});

Route::post('/auth', 'authController@auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'farmer'], function() {

    Route::get('/', function(){
        return view('farmer.pages.home');
    })->name('farmer');

    Route::get('/videos', function () {

        $request = request();

        if ($request->has('filter_query')) {
            $videos = \App\Video::where('tags', 'LIKE', '%'.$request->filter_query. '%')->orWhere('language', 'LIKE', '%'.$request->filter_query.'%')->get();

            return view('farmer.pages.videos', ['videos' => $videos]);
        }

        return view('farmer.pages.videos', ['videos' => \App\Video::all()]);
    })->name("farmer_view_videos");


} );

Route::get('/expert', 'expertsController@readData')->name('expert');

Route::get('/givePersonalizedAdvice', 'expertsController@givePersonalisedAdvice');
Route::get('/uploadVideo', 'expertsController@addVideos');
Route::get('/addAdvice', 'expertsController@addAdvice');



// Route::get('/login', function(){
//     return view('login');
// });

Route::group(['prefix'=>'user', 'middleware' => 'admin'], function() {

    Route::get('/', function () {
            return view('user.pages.home');
         })->name("u_home");

    Route::get('/calendar', function () {
            return view('user.pages.calendar');
         })->name("u_cal");

    Route::get('/forms', function () {
            return view('user.pages.forms');
         })->name("forms");

    Route::get('/dashboard', function () {
            return view('user.pages.forms');
         })->name("dash");

    Route::get('/tables', function () {
            return view('user.pages.tables');
         })->name("tables");

    Route::get('/charts', function () {
            return view('user.pages.charts');
         })->name("charts");

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

Route::get('/products/vendor', function () {
    return view('farmer.pages.sale');
});

Route::post('/products/vendor', function () {


    $request = request();

    $product = new \App\Product();
    $product->name = $request->name;
    $product->tags = $request->tags;
    $product->text = $request->text;
    $product->cost = $request->cost;

    $product->vendor_id = App\User::first()->id;
    $product->save();

    return view('farmer.pages.sale');
});

Route::get('/products/farmer', function() {
    return view('farmer.pages.sale');
});

Route::post('/products/farmer', function () {
    $request = request();

    $product = new \App\FarmerProduct();
    $product->fishname = $request->fishname;
    $product->tags = $request->tags;
    $product->text = $request->text;
    $product->cost = $request->cost;

    $product->farmer_id = App\User::first()->id;
    $product->save();

    return view('farmer.pages.sale');
});


Route::group(['prefix'=>'vendor1', 'middleware' => 'admin'], function() {

    Route::get('/', 'FishController@sendAddr')->name("v_home");
    Route::get('/intr', 'FishController@intr')->name("v_intr");




});

Route::group(['prefix'=>'entrep', 'middleware' => 'admin'], function() {

    Route::get('/', 'FishController@sendAddr')->name("v_home");
    Route::get('/intr', 'FishController@intr')->name("v_intr");
});
