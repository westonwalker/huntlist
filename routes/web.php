<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PlaceController;

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

Route::get('/', [PageController::class, 'home'])->name('pages.home');

Route::get('/contribute', [PageController::class, 'contribute'])->name('pages.contribute');

Route::get('/subscribe', [PageController::class, 'subscribe'])->name('pages.subscribe');

Route::post('/subscribe', [PageController::class, 'storeSubscriber'])->name('pages.subscribe.store');

Route::get('/places/{place:slug}', [PlaceController::class, 'show'])->name('places.show');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';