<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AskController;
use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/event', function () {
    return view('event');
});

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
Route::get('/delete/ask/{id}', [AskController::class, 'destroy'])->name('delete.ask');

//delete offer by id
Route::get('/delete/offer/{id}', [OfferController::class, 'destroy'])->name('delete.offer');

// Show the form to create an offer
Route::get('/new-offer', [OfferController::class, 'create']);
Route::post('/new-offer', [OfferController::class, 'store']);
// Show the form to create an ask
Route::get('/new-ask', [AskController::class, 'create']);
Route::post('/new-ask', [AskController::class, 'store']);

// Show the form to update an ask
Route::get('/update/ask/{id}', [AskController::class, 'edit'])->name('update.ask');
Route::post('/update/ask/{id}', [AskController::class, 'update']);

// Show the form to update a offer
Route::get('/update/offer/{id}', [OfferController::class, 'edit'])->name('update.offer');
Route::post('/update/offer/{id}', [OfferController::class, 'update']);
