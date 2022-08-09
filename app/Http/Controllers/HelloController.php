<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        // $data は連想配列でさまざまな値を格納していく
        return view('hello.index');
    }

    public function post(Request $request)
    {
        return view('hello.index',['msg'=>$request->msg]);
    }
}
