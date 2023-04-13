<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\Hotel\HotelController;
use App\Http\Controllers\Housing\HousingController;
use App\Http\Controllers\Residence\ResidenceController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/', [MainController::class, 'index'])->name('main');

//
Route::get('/hotel', [HotelController::class, 'index'])
    ->name('hotel');
Route::get('/hotel/details', [HotelController::class, 'hotel_details'])
    ->name('hotel_details');

//
Route::get('/residence', [ResidenceController::class, 'index'])
    ->name('residence');
Route::get('/residence/details', [ResidenceController::class, 'residence_details'])
    ->name('residence_details');


//
Route::get('/logement', [HousingController::class, 'index'])
    ->name('housing');
Route::get('/logement/details', [HousingController::class, 'housing_details'])
    ->name('housing_details');

//
Route::get('/evenement', [EventController::class, 'index'])
    ->name('event');
Route::get('/evenement/details', [EventController::class, 'event_details'])
    ->name('event_details');
