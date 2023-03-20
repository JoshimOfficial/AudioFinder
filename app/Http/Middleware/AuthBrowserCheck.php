<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cookie;

class AuthBrowserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(request()->hasCookie('_RAND_ID')) {
            if ($request->route()->hasParameter('searchQuery')) {
                if($request->header('Encrypt-id') && $request->header('Auth-temp-user') ) {
    
                    $encryptId = $request->header('Encrypt-id');
                    $authTempUser = $request->header('Auth-temp-user');
                
                    $currentUser = Cookie::get('_RAND_ID');
                
                    if(decrypt($encryptId) == $currentUser) {
                        $cookie = cookie('_AUTH_', 'accessable_brower', 10080); //___ setting _AUTH_ cookie for 7 days.
                
                        return $next($request)->withCookie($cookie);
                    }
                    else {
                    return redirect()-> route('home.page');
                    }
                
                }
                else {
                    return redirect()-> route('home.page');
                }
            }  
            else {
                if($request->header('Encrypt-id') && $request->header('Auth-temp-user') ) {
    
                    $encryptId = $request->header('Encrypt-id');
                    $authTempUser = $request->header('Auth-temp-user');
                
                    $currentUser = Cookie::get('_RAND_ID');
                
                    if(decrypt($encryptId) == $currentUser) {
                        $cookie = cookie('_AUTH_', 'accessable_brower', 10080); //___ setting _AUTH_ cookie for 7 days.
                
                        return $next($request)->withCookie($cookie);
                    }
                    else {
                    return redirect()-> route('home.page');
                    }
                
                }
                else {
                    return redirect()-> route('home.page');
                }
            }
        }

    }    
}
