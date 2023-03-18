@extends('layouts.index')

{{-- Wrong search title --}}
@section('af.title')
Access denied!
@endsection


{{-- Active home menu --}}
@section('af.activeNav')
text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 dark:text-white
@endsection



{{-- Main content section. Showing users that they searched in a wrong way. --}}
@section('af.contentBody')
<section class="max-w-2xl m-auto h-screen flex flex-col justify-center items-center transition-all duration-300 -z-10">
    <div class="p-2 w-full flex flex-col justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 md:w-24" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 431.15"><g fill-rule="nonzero"><path fill="#D92D27" d="M492.56 431.15H19.42v-.05c-14.72.03-24.33-16.08-16.78-29.12L234.51 9.64c7.35-12.57 25.75-13.05 33.42-.23l240.41 390.96c9.12 12.64.2 30.78-15.78 30.78z"/><path fill="#fff" d="M41.15 399.63h431.88L252.71 47.08c-.63-.99-1.38-.98-1.97 0L40.02 397.9c-.63 1.12-.31 1.74 1.13 1.73z"/><path d="M243.18 246.58h25.46v20.32h-25.46v-20.32zm-78.9 102.8h-17.43v7.87h21.35v12.7h-38.78v-54.47h38.35l-2.18 12.69h-18.74v8.58h17.43v12.63zm58.16 20.57h-19.16l-7.15-16.21h-5v16.21h-16.18v-54.47h27.45c12.49 0 18.74 6.36 18.74 19.08 0 8.72-2.7 14.47-8.11 17.26l9.41 18.13zm-31.31-41.78v12.15h5.26c2.09 0 3.62-.23 4.57-.66.95-.43 1.44-1.44 1.44-3v-4.82c0-1.57-.49-2.58-1.44-3.01-.95-.43-2.49-.66-4.57-.66h-5.26zm84.25 41.78h-19.17l-7.15-16.21h-4.99v16.21h-16.18v-54.47h27.45c12.49 0 18.74 6.36 18.74 19.08 0 8.72-2.7 14.47-8.11 17.26l9.41 18.13zm-31.31-41.78v12.15h5.25c2.1 0 3.63-.23 4.58-.66.95-.43 1.44-1.44 1.44-3v-4.82c0-1.57-.49-2.58-1.44-3.01-.95-.43-2.5-.66-4.58-.66h-5.25zm34.14 14.59c0-9.94 1.86-17.18 5.58-21.74 3.71-4.57 10.43-6.85 20.13-6.85s16.41 2.28 20.13 6.85c3.72 4.56 5.58 11.8 5.58 21.74 0 4.94-.4 9.09-1.18 12.46-.78 3.37-2.14 6.3-4.05 8.8-1.92 2.5-4.57 4.33-7.93 5.49-3.37 1.16-7.55 1.74-12.55 1.74-4.99 0-9.18-.58-12.55-1.74-3.37-1.16-6.01-2.99-7.93-5.49s-3.27-5.43-4.05-8.8c-.79-3.37-1.18-7.52-1.18-12.46zm18.74-9.07v22.66h7.23c2.38 0 4.11-.27 5.19-.83 1.07-.55 1.61-1.81 1.61-3.79v-22.66h-7.33c-2.32 0-4.02.28-5.09.83-1.07.55-1.61 1.81-1.61 3.79zm85.62 36.26H363.4l-7.15-16.21h-4.99v16.21h-16.18v-54.47h27.44c12.5 0 18.75 6.36 18.75 19.08 0 8.72-2.71 14.47-8.11 17.26l9.41 18.13zm-31.31-41.78v12.15h5.25c2.1 0 3.63-.23 4.58-.66.95-.43 1.43-1.44 1.43-3v-4.82c0-1.57-.48-2.58-1.43-3.01-.95-.43-2.5-.66-4.58-.66h-5.25zm-82.62-93h-25.46c-1.82-22.29-4.73-26.26-5.95-40.78-1.25-14.61-2.12-35.58 18.73-35.58 21.86 0 20.1 23.36 18.45 38.47-1.37 12.45-4.05 17.16-5.77 37.89z"/></g></svg>

        <section class=" transition-all duration-300 bg-gray-00 dark:bg-gray-800 w-full rounded h-fit p-3 
        my-2 md:mt-7 text-gray-900 dark:text-gray-100 text-sm ">
        <h1 class="w-full text-center underline text-red-600 md:text-base font-semibold">Warning</h1>
        <div class="text-sm"> 

            <span class="md:hidden">
                We are sorry to say, to protect our sevices from unauthorized access this method is disabled. But you can search using this search field. 
            </span>

            <span class="hidden md:flex text-base">
                We apologize for the inconvenience, but in order to safeguard the security and integrity of our services, this access has been disabled. We understand that this may be frustrating, but it is necessary to prevent unauthorized access or malicious activities that could compromise the functionality of our platform. But it's easy to search from below.
            </span>
        </div>
        </section>
    </div>
    
<section class="w-full flex flex-col items-end">
    @include('pages.search')
</section>
</section>
@endsection