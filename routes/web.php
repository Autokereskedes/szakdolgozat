<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConfiguratorController;

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
    return view('pages/welcome');
});

Route::get('/model', function () {
    return view('pages/configurator');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/AdminUser', [AdminController::class,'users'], function () {
    return view('pages/admin/AdminUser');
});

Route::get('/AdminModell', [AdminController::class,'modellList'], function () {
    return view('pages/admin/AdminModell');
});

Route::post('/setAdminRoute/{id}', [AdminController::class,'setAdmin'])->name('setAdmin');
Route::post('/deleteUserRoute/{id}', [AdminController::class,'deleteUser'])->name('deleteUser');

Route::get('/colorConfig', function () {
    return view('pages/colorconf');
});

Route::get('/interiorConfig', function () {
    return view('pages/interiorconf');
});

Route::get('/package', function () {
    return view('pages/packageconf');
});

Route::get('/motor', function () {
    return view('pages/motor');
});

Route::get('/packageConfig', function () {
    return view('pages/packageconf');
});

Route::get('/sumConfig', function () {
    return view('pages/sumconf');
});

Route::get('/rendeltAuto', function () {
    return view('pages/rendeltauto');
});

