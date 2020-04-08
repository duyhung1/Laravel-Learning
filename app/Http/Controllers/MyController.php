<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\Translation\Dumper\DumperInterface;

class MyController extends Controller
{
    public function xinchao(){
        echo "xin chao";
    }

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

}

