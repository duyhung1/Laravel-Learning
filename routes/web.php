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

Route::get('post/{id} ', function($id) {
    if($id ==1){
        $post = [
            'title' => 'Learning Laravel',
            'content' => 'this blog post will get you right on track with 
            laravel!'
        ];
    }else{
        $post =[
            'title' => 'Something else',
            'content' => 'some other content'
        ];
    }
    //return $post['title'];
    return view('blog.post', ['post'=>$post]);
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
    Route::post('create',function(\Illuminate\Http\Request $request, 
\Illuminate\Validation\Factory $validator) {
        $validation = $validator->make($request->all(),[
            'title'=>'required|min:5',
            'content'=>'required|min:10'
        ]);
        if($validation ->fails()){
            return redirect()->back()->withErrors($validation);
        }
        return redirect()
            ->route('admin.index')
            ->with('info', 'Post created, Content: '.$request->input('content'));
    })->name('admin.create');

    Route::get('edit/{id}', function($id) {
        if($id ==1){
            $post = [
                'title' => 'Learning Laravel',
                'content' => 'this blog post will get you right on track with laravel!'
            ];
        }else{
            $post =[
                'title' => 'Something else',
                'content' => 'some other content'
            ];
        }
        return view('admin.edit', ['post'=>$post]);
    })->name('admin.edit');
    Route::post('edit',function(\Illuminate\Http\Request $request,
\Illuminate\Validation\Factory $validator) {
        $validation =$validator->make($request->all(),[
            'title'=>'required|min:5',
            'content'=>'required|min:10'
        ]);
        if($validation ->fails()){
            return redirect()->back()->withErrors($validation);
        }
        return redirect()
            ->route('admin.index')
            ->with('info', 'Post edited, new Title: '.$request->input('title'));
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
