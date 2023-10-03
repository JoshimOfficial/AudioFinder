<?php
//____Default
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

//___Usage controller
use App\Http\Controllers\UserSearch;
use App\Http\Controllers\DataScrape;
use App\Http\Controllers\Test\TestController;



//___Get audio from the website controllers
use App\Http\Controllers\GetAudio\WebsiteOne;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//___Default when user visits on website homepage it will create a random ID.
Route::get('/',function() {

    // check if the _RAND_ID cookie already exists
    $rand_id = request()->cookie('_RAND_ID');

    // if the _RAND_ID cookie doesn't exist, generate a new one
    if (!$rand_id) {
        $rand_id = strval(mt_rand(1, 999999999999999));
    }

    // set the cookie with the random number and a 1 minute expiration time
    return response()
        ->view('welcome')
        ->cookie('_RAND_ID', $rand_id, 5);


}) -> name('home.page');




//____This is for 'POST' search request.
Route::post('/search', [UserSearch::class, 'UserQuery']) -> name('af.search');


//____This is for 'GET' search request.
Route::get('/search', function() {
    return redirect()-> route('home.page');
});


//____It checks if search get request is valid or not and  if user try to edit url then it will go to the `wrongSearch` view 
Route::get('audio/search/{data}', function($data) {
    return view('search.userSearch',['query' => $data]);
})->name('user.search.audio')->middleware(['tempValidUser', 'validUserRequest']);


//___Data scrape section
Route::get('scrape', [DataScrape::class, 'scrape'])->name('scrape.data');


//____This is for one time user browser verification
Route::get('index/home', function() {
    return redirect()->route('home.page');
})->name('check.AuthBrowser')->middleware(['authBrowser']);



//_____Get API with encryption data
Route::get('data/{searchQuery}',[WebsiteOne::class, 'FirstWebsite'])->name('get.data')->middleware(['tempValidUser','authBrowser']);

//_____Get API with decryption data 
Route::get('audio/search/{encryptedData}/result',[WebsiteOne::class, 'DecryptAudioListData'])->name('decryptAudio.list')->middleware(['tempValidUser']);

//____Deleting user search session
Route::get('audio/get/{encryptedData}/data',[WebsiteOne::class, 'EndTheDecryptAudioListDataSession'])->name('endSession.decryptAudio.list')->middleware(['tempValidUser']);