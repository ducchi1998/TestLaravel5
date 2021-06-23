<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /* Check đăng nhập hay chưa
        if (Auth::check())
        {
            return $next($request);
        } else {
            return redirect()->route('admin.login');
        }*/

        // nếu user đã đăng nhập
        if (Auth::check())
        {
            $user = Auth::user(); // lấy thông tin người dùng đã đăng nhập
            // check quyền admin && trạng thái hoạt động
            if ($user->is_active == 1 )
            {
                return $next($request);
            }
            else
            {
                Auth::logout();
                return redirect()->route('admin.login');
            }
        }

        return redirect()->route('admin.login');

    }
}
