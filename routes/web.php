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
    return view('login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'farmer'], function() {
    Route::get('/', function(){
        return view('farmer.pages.home');
    });

    Route::get('/videos', function () {
        $request = request();
        if ($request->has('filter_query')) {
            $videos = \App\Video::where('tags', 'LIKE', '%'.$request->filter_query. '%')->orWhere('language', 'LIKE', '%'.$request->filter_query.'%')->get();
            return view('farmer.pages.videos', ['videos' => $videos]);
        }
        return view('farmer.pages.videos', ['videos' => \App\Video::all()]);
    })->name("farmer_view_videos");
} );
Route::group(['prefix'=>'community'], function() {
    Route::get('/', function(){
        $request = request();
        if($request->has('filter_query')){
            $not_verified = \App\User::where('name','LIKE','%'.$request->filter_query.'%')
                            ->where('is_verified', 0)
                            ->where('role', $request->has('role'))->get();
            return view('community_member.verification', ['not_verified' => $not_verified]);
        }
        $not_verified = \App\User::where('is_verified', 0)->get();
        return view('community_member.verification', ['not_verified' => $not_verified]);
    });
    Route::get('/verify/{id}', function($id) {
        $request = request();
        $user = \App\User::find($id);
        $user->is_verified = 1;
        $user->save();
        return redirect('community/');
    });
    Route::get('/uploadfile','UploadFileController@index');
    Route::post('/uploadfile','UploadFileController@showUploadFile');   


    Route::get('/videos', function () {
        $request = request();
        if ($request->has('filter_query')) {
            $videos = \App\Video::where('tags', 'LIKE', '%'.$request->filter_query. '%')->orWhere('language', 'LIKE', '%'.$request->filter_query.'%')->get();
            return view('community_member.videos', ['videos' => $videos]);
        }
        return view('community_member.videos', ['videos' => \App\Video::all()]);
    })->name("community_view_videos");
});
Route::get('/expert', 'expertsController@readData');
Route::get('/givePersonalizedAdvice', 'expertsController@givePersonalisedAdvice');
Route::get('/uploadVideo', 'expertsController@addVideos');
Route::get('/addAdvice', 'expertsController@addAdvice');
Route::get('/login', function(){
    return view('login');
})->name('login');
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
Route::get('/vendors/products', function () {
    return view('vendor1.pages.sale');
});
Route::post('/vendors/products', function () {
    $request = request();
    $product = new \App\Product();
    $product->name = $request->name;
    $product->tags = $request->tags;
    $product->text = $request->text;
    $product->cost = $request->cost;
    $product->vendor_id = auth()->user()->id;
    $product->save();
    return view('vendor1.pages.sale');
});
Route::get('/farmer/products', function() {
    return view('farmer.pages.sale');
});
Route::post('/farmer/products', function () {
    $request = request();
    $product = new \App\FarmerProduct();
    $product->fishname = $request->fishname;
    $product->tags = $request->tags;
    $product->text = $request->text;
    $product->cost = $request->cost;
    $product->farmer_id = auth()->user()->id;
    $product->save();
    return view('farmer.pages.sale');
});
Route::group(['prefix'=>'vendors', 'middleware' => 'admin'], function() {
    Route::get('/', 'FishController@list')->name("v_home");
    Route::get('/intr', 'FishController@intr')->name("v_intr");
});
Route::group(['prefix'=>'entrep', 'middleware' => 'admin'], function() {
    Route::get('/', 'FishController@elist')->name("v_home");
    Route::get('/intr', 'FishController@entr')->name("e_intr");
});

Route::get('/vendors/intr', 'FishController@list')->name('v_intr');
Route::get('/farmer/intr', 'FishController@flist')->name('f_intr');