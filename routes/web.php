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


Route::get('/',['as'=>'house','uses'=> 'HouseController@house']);

Route::get('/applymanager',['as'=>'applymanager.index','uses'=> 'ApplymanagerController@applymanager']);


Route::group(['middleware'=>'auth'], function() {
    Route::get('/apply',['as'=>'apply.index','uses'=> 'ApplyController@apply']);
    Route::get('/applymanager' , ['as' => 'applymanager.index' , 'uses' => 'ApplymanagerController@index']);
});

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
});

Route::get('/admin',['as'=>'admin.index','uses'=> 'AdminController@admin']);
Route::get('/admin', ['as' => 'admin.index', 'uses' => 'AdminController@Show']);
//Route::post('/applys', 'AdminController@update');

Route::get('/completed',['as' => 'admin.status', 'uses' => 'AdminController@completed']);

Route::get('/cards',['as'=>'cards.index','uses'=> 'CardsController@cards']);



Route::get('/history',['as'=>'history.index','uses'=> 'HistoryController@history']);
Route::get('/history', ['as' => 'history.index', 'uses' => 'HistoryController@Show']);


Route::get('/house',['as'=>'house.index','uses'=> 'HouseController@house']);
Auth::routes();


Route::auth();
Auth::routes();

//Route::get('/home', 'HouseController@house')->name('house');

Route::post('/apply',['as' => 'apply.store', 'uses' => 'ApplyController@store']);



Route::delete('applymanager/{id}',['as'=>'applymanager.destroy','uses'=>'ApplymanagerController@destroy']);

Route::delete('admin/{id}',['as'=>'admin.destroy','uses'=>'AdminController@destroy']);

//501
Route::get('/one',['as'=>'one.index','uses'=> 'OneController@one']);
Route::get('/one' , ['as' => 'one.index' , 'uses' => 'OneController@index']);
//admin
Route::get('/admin.one',['as'=>'admin.one.index','uses'=> 'OneController@admin.one']);
Route::get('/admin.one' , ['as' => 'admin.one.index' , 'uses' => 'OneController@show']);

//502
Route::get('/two',['as'=>'two.index','uses'=> 'TwoController@two']);
Route::get('/two' , ['as' => 'two.index' , 'uses' => 'TwoController@index']);
//admin
Route::get('/admin.two',['as'=>'admin.two.index','uses'=> 'TwoController@admin.two']);
Route::get('/admin.two' , ['as' => 'admin.two.index' , 'uses' => 'TwoController@show']);



//503
Route::get('/three',['as'=>'three.index','uses'=> 'ThreeController@one']);
Route::get('/three' , ['as' => 'three.index' , 'uses' => 'ThreeController@index']);
//admin
Route::get('/admin.three',['as'=>'admin.three.index','uses'=> 'ThreeController@admin.three']);
Route::get('/admin.three' , ['as' => 'admin.three.index' , 'uses' => 'ThreeController@show']);



//504
Route::get('/four',['as'=>'four.index','uses'=> 'FourController@four']);
Route::get('/four' , ['as' => 'four.index' , 'uses' => 'FourController@index']);
//admin
Route::get('/admin.four',['as'=>'admin.four.index','uses'=> 'FourController@admin.four']);
Route::get('/admin.four' , ['as' => 'admin.four.index' , 'uses' => 'FourController@show']);



//509
Route::get('/nine',['as'=>'nine.index','uses'=> 'NineController@nine']);
Route::get('/nine' , ['as' => 'nine.index' , 'uses' => 'NineController@index']);
//admin
Route::get('/admin.nine',['as'=>'admin.nine.index','uses'=> 'NineController@admin.nine']);
Route::get('/admin.nine' , ['as' => 'admin.nine.index' , 'uses' => 'NineController@show']);

