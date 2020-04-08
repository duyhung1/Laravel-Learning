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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('post/{id} ', function() {
    return view('blog.post');
})->name('blog.post');

Route::get('about', function() {
    return view('other.about');
})->name('other.about');

Route::group(["prefix"=>'admin'], function() {
    Route::get('', function() {
        return view('admin.index');
    })->name('admin.index');  

    Route::get('create', function() {
        return view('admin.create');
    })->name('admin.create');
    Route::post('create',function() {
        return "=============> ";
    })->name('admin.create');

    Route::get('edit/{id}', function() {
        return view('admin.edit');
    })->name('admin.edit');
    Route::post('edit',function() {
        return " <===============";
    })->name('admin.update');
    
});
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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
