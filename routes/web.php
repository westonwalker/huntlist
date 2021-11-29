<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Pages\Contribute;
use App\Http\Livewire\Pages\Subscribe;
use App\Http\Livewire\Places\Show as PlacesShow;

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

Route::get('/', Home::class)->name('home');

Route::get('/contribute', Contribute::class)->name('contribute');

Route::get('/subscribe', Subscribe::class)->name('subscribe');

Route::get('/places/{place:slug}', PlacesShow::class)->name('places.show');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';