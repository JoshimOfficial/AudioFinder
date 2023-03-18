@extends('layouts.index')

@section('af.title')
    Search result for `{{ request()->segment(3) }}`
@endsection

@section('af.contentBody')
<section class="w-full  md:max-w-4xl flex flex-col justify-center items-center m-auto my-10 p-2">
    <h1 class="text-2xl md:text-4xl text-gray-900 dark:text-white uppercase font-bold md:-mb-7 text-center">
        <span class="md:hidden">
            Find your free music.
        </span>

        <span class="hidden md:flex">
            Find unlimited copyright free music.
        </span>
    </h1>
    
    @include('pages.search')
</section>

<section class="w-full md:max-w-7xl flex flex-col m-auto mb-5 p-2">
    @include('pages.audioSections.section')
</section>

@endsection