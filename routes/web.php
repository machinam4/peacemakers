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