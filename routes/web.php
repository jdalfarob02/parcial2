<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/index', 'UserController@index' );

Route::get('/indexpag', 'PagController@indexpag' );

Route::get('/indexcomenblog', 'CometBlogController@indexcomenblog' );





//de 1 a 1
Route::get('/create', 'UserController@create' );


//de 1 a n
Route::get('/createpag', 'PagController@createpag' );

//1 a 1
Route::get('update', 'UserController@update' );
//1 a n
Route::get('updatepag', 'PagController@updatepag' );


//de 1 a 1
Route::get('/destroy', 'UserController@destroy' );

Route::get('/destroy2', 'UserController@destroy2' );
//------------------------------//-------------------//

//1 a n
Route::get('/destroypag', 'PagController@destroypag' );

Route::get('/destroypag2', 'PagController@destroypag2' );
//------------------------------------//-----------------//---


Route::get('/createblogcoment', 'CometBlogController@createblogcoment' );

Route::get('/updateblogcoment', 'CometBlogController@updateblogcoment' );

Route::get('/destroyblogcoment', 'CometBlogController@destroyblogcoment' );
Route::get('/destroyblogcoment2', 'CometBlogController@destroyblogcoment2' );





Route::get('/createusercoment', 'CometBlogController@createusercoment' );

Route::get('/updateusercoment', 'CometBlogController@updateusercoment' );

Route::get('/destroyusercoment', 'CometBlogController@destroyusercoment' );

