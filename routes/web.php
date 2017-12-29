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


Route::get('/',['as'=>'app.index','uses'=> 'AppController@app']);

Route::get('/applymanager',['as'=>'applymanager.index','uses'=> 'ApplymanagerController@applymanager']);

Route::get('/apply',['as'=>'apply.index','uses'=> 'ApplyController@apply']);

Route::get('/admin',['as'=>'admin.index','uses'=> 'AdminController@admin']);
Route::get('/admin', ['as' => 'admin.index', 'uses' => 'AdminController@Show']);
Route::post('/applys', 'AdminController@update');

Route::get('/completed',['as' => 'admin.status', 'uses' => 'AdminController@completed']);

Route::get('/cards',['as'=>'cards.index','uses'=> 'CardsController@cards']);



Route::get('/history',['as'=>'history.index','uses'=> 'HistoryController@history']);
Route::get('/history', ['as' => 'history.index', 'uses' => 'HistoryController@Show']);



Route::get('/house',['as'=>'house.index','uses'=> 'HouseController@house']);
Auth::routes();


Route::auth();
Auth::routes();

Route::get('/home', 'HouseController@house')->name('house');

Route::post('/apply',['as' => 'apply.store', 'uses' => 'ApplyController@store']);

Route::get('/applymanager' , ['as' => 'applymanager.index' , 'uses' => 'ApplymanagerController@index']);

Route::delete('applymanager/{id}',['as'=>'applymanager.destroy','uses'=>'ApplymanagerController@destroy']);

//501
Route::get('/one',['as'=>'one.index','uses'=> 'OneController@one']);

Route::get('/one' , ['as' => 'one.index' , 'uses' => 'OneController@index']);

Route::delete('one/{id}',['as'=>'one.destroy','uses'=>'OneController@destroy']);

//502
Route::get('/two',['as'=>'two.index','uses'=> 'TwoController@two']);

Route::get('/two' , ['as' => 'two.index' , 'uses' => 'TwoController@index']);

Route::delete('two/{id}',['as'=>'two.destroy','uses'=>'TwoController@destroy']);

//503
Route::get('/three',['as'=>'three.index','uses'=> 'ThreeController@one']);

Route::get('/three' , ['as' => 'three.index' , 'uses' => 'ThreeController@index']);

Route::delete('three/{id}',['as'=>'three.destroy','uses'=>'ThreeController@destroy']);

//504
Route::get('/four',['as'=>'four.index','uses'=> 'FourController@four']);

Route::get('/four' , ['as' => 'four.index' , 'uses' => 'FourController@index']);

Route::delete('four/{id}',['as'=>'four.destroy','uses'=>'FourController@destroy']);

//509
Route::get('/nine',['as'=>'nine.index','uses'=> 'NineController@nine']);

Route::get('/nine' , ['as' => 'nine.index' , 'uses' => 'NineController@index']);

Route::delete('nine/{id}',['as'=>'nine.destroy','uses'=>'NineController@destroy']);