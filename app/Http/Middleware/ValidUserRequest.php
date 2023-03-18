<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cookie;
use DB;

class ValidUserRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $validUserList = DB::table('users_search')->pluck('temp_user_id');

        if($validUserList->contains(Cookie::get('_RAND_ID'))) {
        $validUserSearchList = DB::table('users_search')->pluck('user_search_query');
    
        if($validUserSearchList->contains($request->data)) {
             return $next($request);
        }
        else {
            return response()->view('pages.wrongSearch');
        }
        }
        else {
            return response()->view('pages.wrongSearch');
        }
    }
}
