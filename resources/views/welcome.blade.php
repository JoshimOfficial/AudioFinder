@extends('layouts.index')

@section('af.activeNav')
text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 dark:text-white
@endsection

@section('af.title')
AudioFiner ~ Find copyright free audio
@endsection


@section('af.contentBody')
<section class="bg-white dark:bg-gray-900 transition-all duration-300">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-center md:text-left text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Find your copyright free music for free</h1>
            <p class="max-w-2xl text-center mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Finding copyright-free music is crucial when creating videos for online platforms as using copyrighted material without permission may result in legal issues. This process can often be challenging and time-consuming.</p>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
        </div>                
    </div>
</section>






<section class="max-w-7xl m-auto my-10
 flex justify-center flex-col p-3 -mt-5">
    <h1 class=" mb-7 text-center md:text-left text-3xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Search your music now!</h1>
<form class="flex items-center" method="POST" action="{{ route('af.search') }}">
    @csrf   
    <label for="musicSearch" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="musicSearch" name="q" class="bg-gray-50 border border-gradient-to-br text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
    </div>
    </button>
  

    <button class="relative mt-1 inline-flex flex-shrink-0 items-center justify-center p-0.5 ml-3 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
        <span class="relative flex  px-2 py-2 md:py-2.5 md:px-4 transition-all ease-in duration-100 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg> 
            <span>Search</span>
        </span>
      </button>

      

</form>


</section>



<section class="max-w-7xl p-5 flex flex-col justify-start m-auto">

<h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Why use our service?</h2>
<ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
    <li class="flex items-start">

        
<svg xmlns="http://www.w3.org/2000/svg"  class="w-4 h-4 mr-1.5 text-blue-600 flex-shrink-0 mt-2" fill="currentColor"  viewBox="0 0 24 24"><g><path d="M22.5 4.5c-.8-.8-2.2-.8-3 0L9 15l-4.5-4.5c-.8-.8-2.2-.8-3 0s-.8 2.2 0 3L9 21 22.5 7.5c.8-.8.8-2.2 0-3z"></path></g></svg>

        <p>
            <span class="text-gray-800 dark:text-gray-100 font-bold">Time-Saving:</span> Users can save a considerable amount of time by using this website to find copyright-free music instead of manually searching for it on various platforms. <br> <br>
        </p>
    </li>
    <li class="flex items-start">
        <svg xmlns="http://www.w3.org/2000/svg"  class="w-4 h-4 mr-1.5 text-blue-600 flex-shrink-0 mt-2" fill="currentColor"  viewBox="0 0 24 24"><g><path d="M22.5 4.5c-.8-.8-2.2-.8-3 0L9 15l-4.5-4.5c-.8-.8-2.2-.8-3 0s-.8 2.2 0 3L9 21 22.5 7.5c.8-.8.8-2.2 0-3z"></path></g></svg>
        <p>
            <span class="text-gray-800 dark:text-gray-100 font-bold ">Legal Protection:</span> Using copyrighted music without permission can result in legal consequences, such as takedown notices or even lawsuits. By using copyright-free music from this website, users can avoid these issues and protect themselves legally. <br> <br>
        </p>
    </li>
    <li class="flex items-start">
        <svg xmlns="http://www.w3.org/2000/svg"  class="w-4 h-4 mr-1.5 text-blue-600 flex-shrink-0 mt-2" fill="currentColor"  viewBox="0 0 24 24"><g><path d="M22.5 4.5c-.8-.8-2.2-.8-3 0L9 15l-4.5-4.5c-.8-.8-2.2-.8-3 0s-.8 2.2 0 3L9 21 22.5 7.5c.8-.8.8-2.2 0-3z"></path></g></svg>
        <p>
            <span class="text-gray-800 dark:text-gray-100 font-bold">Wide Selection:</span> this website can offer a wide selection of copyright-free music for users to choose from, giving them more options to find the perfect music for their videos. <br> <br>
        </p>
    </li>
    <li class="flex items-start">
        <svg xmlns="http://www.w3.org/2000/svg"  class="w-4 h-4 mr-1.5 text-blue-600 flex-shrink-0 mt-2" fill="currentColor"  viewBox="0 0 24 24"><g><path d="M22.5 4.5c-.8-.8-2.2-.8-3 0L9 15l-4.5-4.5c-.8-.8-2.2-.8-3 0s-.8 2.2 0 3L9 21 22.5 7.5c.8-.8.8-2.2 0-3z"></path></g></svg>
        <p>
            <span class="text-gray-800 dark:text-gray-100 font-bold">Cost-Effective:</span> Users can save money by using this website to find copyright-free music instead of paying licensing fees for copyrighted material. <br> <br>
        </p>
    </li>
    <li class="flex items-start">
        <svg xmlns="http://www.w3.org/2000/svg"  class="w-4 h-4 mr-1.5 text-blue-600 flex-shrink-0 mt-2" fill="currentColor"  viewBox="0 0 24 24"><g><path d="M22.5 4.5c-.8-.8-2.2-.8-3 0L9 15l-4.5-4.5c-.8-.8-2.2-.8-3 0s-.8 2.2 0 3L9 21 22.5 7.5c.8-.8.8-2.2 0-3z"></path></g></svg>
        <p>
            <span class="text-gray-800 dark:text-gray-100 font-bold">High Quality:</span> this website can provide high-quality copyright-free music, which can enhance the production value of users' videos and improve their overall quality. <br> <br>
        </p>
    </li>
    
</ul>
</section>
@endsection
