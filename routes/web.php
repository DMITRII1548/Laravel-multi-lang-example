<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('locate')->group(function () {
    Route::view('/home', 'home');
});


Route::get('lang/{locale}', function (string $locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang');

Route::get('/posts', [PostController::class, 'index'])->middleware('locate');
