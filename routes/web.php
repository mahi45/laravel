<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\example\FirstController;

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
    return view('welcome');
});

// Route::get('/about', function(){
//     return view('about');
// });

Route::view('/about', 'about');

Route::get('/contact', [FirstController::class, 'index'])->name('contact-us');

// Route::get('/contact', function(){
//     return view('contact');
// })->name('contact-us');

Route::get('/country', function(){
    return view('country');
})->middleware('countryMiddleware');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
