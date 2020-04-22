<?php

use App\Http\Controllers\MyController;
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

Route::get('/', ['as'=>'index', 'uses'=>'MyController@index']);//as: dat ten (dinh danh) cho "/"

Route::get('about',['as'=>'other.about', 'uses'=>'MyController@about']);

Route::get('readmode/{id} ', ['as'=>'blog.readMore', 'uses'=>'MyController@readmore']);

Route::group(["prefix"=>'admin'], function() {
    Route::get('',['as'=>'admin.index', 'uses'=>'MyController@adminIndex']);

    Route::get('create', ['as'=>'admin.create', 'uses'=>'MyController@adminCreate']);
    Route::post('create',['as'=>'admin.postcreate', 'uses'=>'MyController@checkCreate']);

    Route::get('edit/{id}',['as'=>'admin.edit', 'uses'=>'MyController@adminEdit']);
    Route::post('edit',['as'=>'admin.update', 'uses'=>'MyController@checkEdit']);
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//----------------------------------Khoa Pham
Route::get('goiten', function() {
    return redirect()->route('welcome'); //goi route theo dinh danh name
});

Route::get('goicontroller', 'MyController@xinchao');
Route::get('ten/{ten}','MyController@datten');

Route::get('getForm','MyController@getForm');
Route::post('postForm','MyController@postForm')->name('postForm');

//Cookie
Route::get('setCookie','MyController@setCookie');
Route::get('getCookie','MyController@getCookie');

Route::get('time/{t}', 'MyController@time');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
