<?php


use App\Http\Controllers\AdminPanel\NewsController;
use App\Http\Controllers\AdminPanel\PromocodeController;
use App\Http\Controllers\AdminPanel\UserController;
use App\Http\Controllers\GuestAndUsers\ActualCodesController;
use App\Http\Controllers\GuestAndUsers\GuestNewsController;
use App\Http\Controllers\UserPanel\AccountController;
use Illuminate\Support\Facades\Auth;
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


//guest
Route::get('/' , [ActualCodesController::class, 'show']) -> name('actualCodes.show');
Route::get('/about' , function () {return view('about', ['title' => "About", 'user' => Auth::user()]);})
    -> name('about.show');
Route::resource('news', GuestNewsController::class)->only([
    'index', 'show'
])->names([
    'index' => 'gn-news.index',
    'show' => 'gn-news.show'
]);

//user
Route::prefix('myads')->middleware(['auth', 'role:user'])->group(function () {
    Route::resource('accounts', AccountController::class);
});


//admin
Route::prefix('dashboard')->middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('promocode', PromocodeController::class);
    Route::resource('users', UserController::class);
    Route::resource('news', NewsController::class);
    Route::redirect('/', '/dashboard/promocode')->name('dashboard');
});

Route::fallback(function () {
    return view('404');
});

require __DIR__.'/auth.php';
