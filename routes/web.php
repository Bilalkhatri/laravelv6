<?php

use App\Http\Livewire\Panel\Admin\ArtisanGui;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('artisangui',ArtisanGui::class);
// Route::get('/artisangui', ArtisanGui::class)->name('artisangui');

Route::get('/artisangui', function () {
    return view('artisan');
});
