<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/about', function () {
    return view('main.about');
})->name('about');
Route::get('/contact', function () {
    return view('main.contact');
})->name('contact');

// destination routes
Route::get('/serengeti', function () {
    return view('main.destinations.serengeti');
})->name('serengeti');
Route::get('/ngorongoro', function () {
    return view('main.destinations.ngorongoro');
})->name('ngorongoro');
Route::get('/manyara', function () {
    return view('main.destinations.manyara');
})->name('manyara');
Route::get('/tarangire', function () {
    return view('main.destinations.tarangire');
})->name('tarangire');
Route::get('/arusha', function () {
    return view('main.destinations.arusha');
})->name('arusha');
Route::get('/zanzibar', function () {
    return view('main.destinations.zanzibar');
})->name('zanzibar');


Route::get('/package', function () {
    return view('main.safaris.package-details');
})->name('package');
Route::get('/majestic_tanzania', function () {
    return view('main.safaris.majestic_tanzania');
})->name('majestic_tanzania');
Route::get('/epic_family_safari_adventure', function () {
    return view('main.safaris.epic_family_safari_adventure');
})->name('epic_family_safari_adventure');
Route::get('/luxury', function () {
    return view('main.safaris.luxury');
})->name('luxury');
Route::get('/luxury_journey_of_the_wildbeest_tour', function () {
    return view('main.safaris.luxury_journey_of_the_wildbeest_tour');
})->name('luxury_journey_of_the_wildbeest_tour');
Route::get('/midrange_lodge_group_tour', function () {
    return view('main.safaris.midrange_lodge_group_tour');
})->name('midrange_lodge_group_tour');
Route::get('/great_migration', function () {
    return view('main.safaris.great_migration');
})->name('great_migration');
Route::get('/safari_cultural', function () {
    return view('main.safaris.safari_cultural');
})->name('safari_cultural');
Route::get('/3days_tarangire_and_lake_manyara', function () {
    return view('main.safaris.3days_tarangire_and_lake_manyara');
})->name('3days_tarangire_and_lake_manyara');
Route::get('/adventure_trip', function () {
    return view('main.safaris.adventure_trip');
})->name('adventure_trip');
