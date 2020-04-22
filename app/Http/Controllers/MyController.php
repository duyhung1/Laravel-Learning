<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Factory;
use Symfony\Component\Translation\Dumper\DumperInterface;

class MyController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('other.about');
    }

    public function readmore($id) {
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
        return view('blog.readMore', ['readmore'=>$post]);
    }

    public function adminIndex(){
        return view('admin.index');
    }

    public function adminCreate(){
        return view('admin.create');
    }

    public function checkCreate(Request $request, Factory $validator) {
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
    }

    public function adminEdit($id) {
        if($id ==1){
            $post = [
                'title' => 'Learning Laravel',
                'content' => 'this blog post will get you right on track with laravel!'
            ];
        }else{
            $post = [
                'title' => 'Something else',
                'content' => 'some other content'
            ];
        }
        return view('admin.edit', ['edit'=>$post]);
    }

    public function checkEdit(Request $request, Factory $validator){
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
    }

//---------------------------------------------------------------
   

    public function datten($ten) {
        echo "ten toi la: ".$ten;
        return redirect()->route('other.about');
    }

    public function getForm() {
        return view('postForm');
    }

    public function postForm(Request $request) {
        if($request->has('Hoten')){
            echo "co<br>";
        }else{
            echo "khong<br>";
        }
        echo $request->Hoten;
    }

    public function setCookie() {
        $response = new Response();
        $response ->withCookie(
            'KhoaHoc', 
            'Laravelaaaaaaa', 
             0.1);    // thoi gian song (phut)
        //echo "da xet cookie";.
        return $response;
    }
    public function getCookie(Request $request) {
        echo "Cookie cua ban la:";
        return $request->cookie('KhoaHoc');
    }

    public function time($t){
        return view('welcom1',['mytime'=>$t]);
    }

}

