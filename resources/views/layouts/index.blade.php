<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('af.title')</title>
        <link rel="shortcut icon" href="{{ asset('assets/imgs/logo_fav/fav.svg') }}" type="image/x-icon">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script>
$(document).ready(function() {

let authVerify = '{{ !Cookie::has('_AUTH_') }}';

if (authVerify == 1) {
    $.ajax({
        url: '{{ route('check.AuthBrowser') }}',
        headers: {
            'Encrypt-id': '{{ encrypt(Cookie::get('_RAND_ID')) }}',
            'Auth-temp-user': 'true'
        },
        success: function(data) {
        ShowLog(arrFirstAsk)
        },
        error: function(xhr, status, error) {
            
        }
    });

} 
});
        </script>
  </head>


@if (request()->Cookie('_AUTH_') === 'accessable_brower')
    @include('layouts.indexBody')
        
    @else
    <body class="bg-gray-100 dark:bg-gray-900 transition-all duration-300">

      <nav class="bg-white px-2 sm:px-4 py-2.5 border-b-2 border-gray-300 transition-all duration-300 dark:border-gray-500 rounded dark:bg-gray-900">
          <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="{{ route('home.page') }}" class="flex items-center">
                <img src="{{ asset('assets/imgs/logo_fav/logo.svg') }}" class="h-6 mr-3 sm:h-9" alt="AF Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">AudioFinder</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
              <ul class="flex flex-col transition-all duration-300 p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                  <a href="{{ route('home.page') }}" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700  transition-all duration-300 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent @yield('af.activeNav')" aria-current="page">Home</a>
                </li>
                <li>
                  <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700  transition-all duration-300 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">How to use</a>
                </li>
                <li>
                  <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700  transition-all duration-300 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                </li>
                <li>
                  <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700  transition-all duration-300 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                </li>
                <li>
  <!-- Dark/Light mode svg section started-->
  <div class="ml-3 mt-1 md:ml-0">
      <!-- Dark mode -->
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4 cursor-pointer hidden" id="dark_mode" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
         <defs>
         </defs>
         <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
            <path d="M 87.823 60.7 c -0.463 -0.423 -1.142 -0.506 -1.695 -0.214 c -15.834 8.398 -35.266 2.812 -44.232 -12.718 c -8.966 -15.53 -4.09 -35.149 11.101 -44.665 c 0.531 -0.332 0.796 -0.963 0.661 -1.574 c -0.134 -0.612 -0.638 -1.074 -1.259 -1.153 c -9.843 -1.265 -19.59 0.692 -28.193 5.66 C 13.8 12.041 6.356 21.743 3.246 33.35 S 1.732 57.08 7.741 67.487 c 6.008 10.407 15.709 17.851 27.316 20.961 C 38.933 89.486 42.866 90 46.774 90 c 7.795 0 15.489 -2.044 22.42 -6.046 c 8.601 -4.966 15.171 -12.43 18.997 -21.586 C 88.433 61.79 88.285 61.123 87.823 60.7 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #374151; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
         </g>
      </svg>
      <!-- light mode -->
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4 h-4 cursor-pointer text-red-600 hidden" fill="currentColor" id="light_mode" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
         <defs></defs>
         <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
            <path d="M 45 68 c -12.682 0 -23 -10.317 -23 -23 c 0 -12.682 10.318 -23 23 -23 c 12.683 0 23 10.318 23 23 C 68 57.683 57.683 68 45 68 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: white; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
            <path d="M 45 17.556 c -1.657 0 -3 -1.343 -3 -3 V 3 c 0 -1.657 1.343 -3 3 -3 c 1.657 0 3 1.343 3 3 v 11.556 C 48 16.212 46.657 17.556 45 17.556 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: white; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
            <path d="M 45 90 c -1.657 0 -3 -1.343 -3 -3 V 75.444 c 0 -1.657 1.343 -3 3 -3 c 1.657 0 3 1.343 3 3 V 87 C 48 88.657 46.657 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: white; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
            <path d="M 14.556 48 H 3 c -1.657 0 -3 -1.343 -3 -3 c 0 -1.657 1.343 -3 3 -3 h 11.556 c 1.657 0 3 1.343 3 3 C 17.556 46.657 16.212 48 14.556 48 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: white; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
            <path d="M 87 48 H 75.444 c -1.657 0 -3 -1.343 -3 -3 c 0 -1.657 1.343 -3 3 -3 H 87 c 1.657 0 3 1.343 3 3 C 90 46.657 88.657 48 87 48 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: white; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
            <path d="M 66.527 26.473 c -0.768 0 -1.535 -0.293 -2.121 -0.878 c -1.172 -1.172 -1.172 -3.071 0 -4.243 l 8.171 -8.171 c 1.172 -1.172 3.07 -1.171 4.242 0 c 1.172 1.172 1.172 3.071 0 4.243 l -8.171 8.171 C 68.063 26.18 67.295 26.473 66.527 26.473 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: white; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
            <path d="M 15.302 77.698 c -0.768 0 -1.536 -0.293 -2.121 -0.879 c -1.172 -1.171 -1.172 -3.071 0 -4.242 l 8.171 -8.171 c 1.171 -1.172 3.071 -1.172 4.242 0 c 1.172 1.171 1.172 3.071 0 4.242 l -8.171 8.171 C 16.837 77.405 16.069 77.698 15.302 77.698 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: white; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
            <path d="M 23.473 26.473 c -0.768 0 -1.536 -0.293 -2.121 -0.878 l -8.171 -8.171 c -1.172 -1.172 -1.172 -3.071 0 -4.243 c 1.172 -1.172 3.072 -1.171 4.243 0 l 8.171 8.171 c 1.172 1.172 1.172 3.071 0 4.243 C 25.008 26.18 24.24 26.473 23.473 26.473 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: white; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
            <path d="M 74.698 77.698 c -0.768 0 -1.535 -0.293 -2.121 -0.879 l -8.171 -8.171 c -1.172 -1.171 -1.172 -3.071 0 -4.242 c 1.172 -1.172 3.07 -1.172 4.242 0 l 8.171 8.171 c 1.172 1.171 1.172 3.071 0 4.242 C 76.233 77.405 75.466 77.698 74.698 77.698 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: white; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
         </g>
      </svg>
   </div>
   <!-- Dark/Light mode svg section ended-->
                </li>
              </ul>
            </div>
          </div>
        </nav>

@include('layouts.loadingSpinner')

      <footer class="p-4 bg-white md:p-8 lg:p-10 border-t border-gray-300 dark:border-gray-500 dark:bg-gray-900 transition-all duration-300">
        <div class="mx-auto max-w-screen-xl text-center">
            <a href="{{ route('home.page') }}" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
              <img src="{{ asset('assets/imgs/logo_fav/logo.svg') }}" class="h-6 mr-3 sm:h-9" alt="AF Logo">
                AudioFinder    
            </a>
            <p class="my-6 text-gray-500 dark:text-gray-400">Unlock the Secrets to Free, High-Quality Copyright-Free Music: A Comprehensive Guide for Content Creators</p>
            <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
                <li>
                    <a href="{{ route('home.page') }}" class="mr-4 hover:underline md:mr-6 ">Home</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">How to use</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Contact</a>
                </li>
            </ul>
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023-{{ date('Y') }} <a href="{{ route('home.page') }}" class="hover:underline">AudioFinder</a>. All Rights Reserved.</span>
        </div>
      </footer>
      <script src="{{ asset('assets/js/theme.js') }}"></script>
@endif