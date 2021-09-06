<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AskController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\WeatherController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use App\Models\Ask;
//use App\Models\Offer;


use App\Http\Controllers\AccordController;
use App\Http\Controllers\AccordAskController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/home', function () {
    return view('home');
});*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

require __DIR__ . '/auth.php';



Route::get('/events', [EventController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

//route contact-us form
//Route::get('/contact-us', function () {
//  return view('contact-us');
//});
//Route::get('/contact-us','ContactController@contact');NO WORK with LARAVEL 8
Route::get('/contact-us', [ContactController::class, 'contact']);
Route::post('/contact-us', [ContactController::class, 'contactSubmit'])->name('contact.submit');




// CREATE THE ROUTE TO DISPLAY ONE SPECIFIC PAGE of HelpOffer
Route::get('/offer-{id}', [OfferController::class, 'show'])->name('details.offer');

// CREATE THE ROUTE TO DISPLAY ONE SPECIFIC PAGE of HelpRequest
Route::get('/ask-{id}', [AskController::class, 'show'])->name('details.ask');

//List of asks
Route::get('/asks', [AskController::class, 'index']);

//List of offers
Route::get('/offers', [OfferController::class, 'index']);

//delete ask by id
Route::get('/delete/ask-{id}', [AskController::class, 'destroy'])->middleware(['auth'])->name('delete.ask');

//delete offer by id
Route::get('/delete/offer-{id}', [OfferController::class, 'destroy'])->middleware(['auth'])->name('delete.offer');

// Show the form to create an offer
Route::get('/new-offer', [OfferController::class, 'create'])->name('show.ajax.form');
Route::post('/new-offer', [OfferController::class, 'store'])->name('submit.offer.form');

// Show the form to create an ask
Route::get('/new-ask', [AskController::class, 'create'])->name('show.ajax.form');
Route::post('/new-ask', [AskController::class, 'store'])->name('submit.ask.form');

// Show the form to update an ask
Route::get('/update/ask-{id}', [AskController::class, 'edit'])->middleware(['auth'])->name('update.ask');
Route::post('/update/ask-{id}', [AskController::class, 'update']);

// Show the form to update a offer
Route::get('/update/offer-{id}', [OfferController::class, 'edit'])->middleware(['auth'])->name('update.offer');
Route::post('/update/offer-{id}', [OfferController::class, 'update']);

// Create an accord by offer
//Route::get('/accords', [AccordController::class, 'create'])->name('accords');
Route::get('/accords', [AccordController::class, 'show']);

Route::get('/accords-{offer_id}-{title}', [AccordController::class, 'index'])->name('accept.accord');

// CREATE THE ROUTE TO DISPLAY ONE SPECIFIC accord
Route::get('/accord-{id}', [AccordController::class, 'show1'])->name('details.accord');

// Create an accord by ask
//Route::get('/accords', [AccordController::class, 'create'])->name('accords');
//Route::get('/accords', [AccordAskController::class, 'show']);

Route::get('/accords-{ask_id}-{title}', [AccordAskController::class, 'index'])->name('accept.accord');

// CREATE THE ROUTE TO DISPLAY ONE SPECIFIC accord
//Route::get('/accord/{id}', [AccordAskController::class, 'show'])->name('details.accord');

// CREATE THE ROUTE TO DISPLAY WEATHER
Route::get('/weather', [WeatherController::class, 'getWeather']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('home');
})->name('dashboard');
