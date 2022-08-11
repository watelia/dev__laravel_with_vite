<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        // $data は連想配列でさまざまな値を格納していく
        $data = [
            ['name' => 'watelia', 'mail' => 'watelia@gmail.com'],
            ['name' => 'ore', 'mail' => 'ore@gmail.com'],
            ['name' => 'dareyaomae', 'mail' => 'dareyaomae@gmail.com']
        ];
        return view('hello.index',['data' => $data]);
    }

    public function post(Request $request)
    {
        return view('hello.index',['msg'=>$request->msg]);
    }
}
