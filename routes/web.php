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


/*

Route::get('/home', function () {
    return view('index');
});
*/

//Route::get('/',['as'=>'app.index','uses'=> 'AppController@app']);


Route::auth();
Auth::routes();
Route::get('/',['as'=>'house','uses'=> 'HouseController@house']);



Route::group(['middleware'=>'auth'], function() {
    Route::get('/apply',['as'=>'apply.index','uses'=> 'ApplyController@apply']);
    Route::get('/applymanager' , ['as' => 'applymanager.index' , 'uses' => 'ApplymanagerController@index']);
});

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
});
//need group
Route::get('/admin',['as'=>'admin.index','uses'=> 'AdminController@admin']);
Route::get('/admin', ['as' => 'admin.index', 'uses' => 'AdminController@Show']);
Route::delete('admin/{id}',['as'=>'admin.destroy','uses'=>'AdminController@destroy']);

Route::get('/history',['as'=>'history.index','uses'=> 'HistoryController@history']);
Route::get('/history', ['as' => 'history.index', 'uses' => 'HistoryController@Show']);


Route::delete('applymanager/{id}',['as'=>'applymanager.destroy','uses'=>'ApplymanagerController@destroy']);



//no group
Route::get('/completed',['as' => 'admin.status', 'uses' => 'AdminController@completed']);
Route::get('/refuse',['as' => 'admin.refuse', 'uses' => 'AdminController@refuse']);

Route::get('/cards',['as'=>'cards.index','uses'=> 'CardsController@cards']);

Route::get('/house',['as'=>'house.index','uses'=> 'HouseController@house']);

Route::post('/apply',['as' => 'apply.store', 'uses' => 'ApplyController@store']);

//class
Route::get('/classtatus/{name}',['as' => 'classtatus.index' , 'uses' => 'ClassController@index']);
//admin
Route::get('/admin.classtatus/{name}' , ['as' => 'admin.classtatus.index' , 'uses' => 'ClassController@show']);



