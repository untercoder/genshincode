<?php

use App\Http\Controllers\ActualCodesController;
use App\Http\Controllers\AdminPanel\PromocodeController;
use App\Http\Controllers\AdminPanel\UserController;
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

Route::get('/' , [ActualCodesController::class, 'showActual']) -> name('ActualCodes.show');
Route::get('/about' , [ActualCodesController::class, 'showAbout'] ) -> name('about.show');

Route::prefix('dashboard')->middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('promocode', PromocodeController::class);
    Route::resource('users', UserController::class);
    Route::redirect('/', '/dashboard/promocode')->name('dashboard');
});

Route::fallback(function () {
    return view('404');
});

require __DIR__.'/auth.php';
