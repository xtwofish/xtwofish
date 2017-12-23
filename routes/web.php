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


Route::get('/',['as'=>'home.index','uses'=> 'HomeController@home']);

Route::get('/applymanager',['as'=>'applymanager.index','uses'=> 'ApplymanagerController@applymanager']);

Route::get('/apply',['as'=>'apply.index','uses'=> 'ApplyController@apply']);

Route::get('/register',['as'=>'register.index','uses'=> 'RegisterController@register']);