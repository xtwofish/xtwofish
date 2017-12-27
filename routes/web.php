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


Route::get('/',['as'=>'house.index','uses'=> 'HouseController@house']);

Route::get('/applymanager',['as'=>'applymanager.index','uses'=> 'ApplymanagerController@applymanager']);

Route::get('/apply',['as'=>'apply.index','uses'=> 'ApplyController@apply']);

Route::get('/register',['as'=>'register.index','uses'=> 'RegisterController@register']);

Route::get('/login',['as'=>'login.index','uses'=> 'LoginController@login']);

Route::get('/admin',['as'=>'admin.index','uses'=> 'AdminController@admin']);

Route::get('/cards',['as'=>'cards.index','uses'=> 'CardsController@cards']);

Route::get('/tables',['as'=>'tables.index','uses'=> 'TablesController@tables']);

Route::get('/history',['as'=>'history.index','uses'=> 'HistoryController@history']);

Route::post('/apply',['as' => 'apply.store', 'uses' => 'ApplyController@store']);