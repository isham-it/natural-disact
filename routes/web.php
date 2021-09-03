<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AskController;
use App\Http\Controllers\OfferController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;



//use App\Models\Ask;
//use App\Models\Offer;


use App\Http\Controllers\AccordController;

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

require __DIR__.'/auth.php';



Route::get('/event', [EventController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



// CREATE THE ROUTE TO DISPLAY ONE SPECIFIC PAGE of HelpOffer
Route::get('/offer/{id}', [OfferController::class, 'show'])->name('details.offer');

// CREATE THE ROUTE TO DISPLAY ONE SPECIFIC PAGE of HelpRequest
Route::get('/ask/{id}', [AskController::class, 'show'])->name('details.ask');

//List of asks
Route::get('/asks', [AskController::class, 'index']);

//List of offers
Route::get('/offers', [OfferController::class, 'index']);

//delete ask by id
Route::get('/delete/ask/{id}', [AskController::class, 'destroy'])->middleware(['auth'])->name('delete.ask');

//delete offer by id
Route::get('/delete/offer/{id}', [OfferController::class, 'destroy'])->middleware(['auth'])->name('delete.offer');

// Show the form to create an offer
Route::get('/new-offer', [OfferController::class, 'create'])->middleware(['auth'])->name('new.offer');
Route::post('/new-offer', [OfferController::class, 'store']);

// Show the form to create an ask
Route::get('/new-ask', [AskController::class, 'create'])->middleware(['auth'])->name('new.ask');
Route::post('/new-ask', [AskController::class, 'store']);

// Show the form to update an ask
Route::get('/update/ask/{id}', [AskController::class, 'edit'])->middleware(['auth'])->name('update.ask');
Route::post('/update/ask/{id}', [AskController::class, 'update']);

// Show the form to update a offer
Route::get('/update/offer/{id}', [OfferController::class, 'edit'])->middleware(['auth'])->name('update.offer');
Route::post('/update/offer/{id}', [OfferController::class, 'update']);

// Create an accord
//Route::get('/accords', [AccordController::class, 'create'])->name('accords');
Route::get('/accords', [AccordController::class, 'show']);

Route::get('/accords/{offer_id}/{title}', [AccordController::class, 'index'])->name('accept.accord');

// CREATE THE ROUTE TO DISPLAY ONE SPECIFIC accord
Route::get('/accord/{id}', [AccordController::class, 'show'])->name('details.accord');




