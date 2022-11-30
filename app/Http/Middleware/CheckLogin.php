<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//muon su dung doi tuong nao trong class thi phai khai bao o day
//doi tuong dang nhap
use Auth;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
      //kiemtra xem user da dang nhap chua
    /*
      url('login') -> tao duong dan url
      redirect -> di chuyen den 1 url
    */

        if(Auth::check() == false)
        return redirect(url('login'));
        return $next($request);
    }
}
