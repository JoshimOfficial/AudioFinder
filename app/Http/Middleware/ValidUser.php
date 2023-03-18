<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;
use DB;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Cookie::has('_RAND_ID')) {
            $ifTempUserCookieIdExist = Cookie::get('_RAND_ID');

            if($ifTempUserCookieIdExist) {
                $userIdToCheck = $ifTempUserCookieIdExist;
                $existsToDB = DB::table('users_search')->where('temp_user_id', $userIdToCheck)->exists();
    
                if($existsToDB) {
                    return $next($request);
                }
                return redirect()-> route('home.page');
            }
            else {
                return redirect()->route('home.page');
            }
        }
        else {
            return redirect()->route('home.page');
        }
    }
}
