<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    public function handle($request, Closure $next)
    {
        $data = [
            ['name' => 'taro', 'mail' =>'taro@yamadata'],
            ['name' => 'hanako', 'mail' =>'hanako@flower'],
            ['name' => 'sachiko', 'mail' =>'sachiko@happy'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
