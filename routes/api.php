<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ConfiguratorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('modells', [ConfiguratorController::class, 'modell_listaz']);
//Route::get('modells/{osztaly}', [ConfiguratorController::class, 'modellRendez']);
Route::get('autoOsztaly', [ConfiguratorController::class, 'modellRendez']);
Route::get('modell', [ConfiguratorController::class, 'modell_rendez']);
Route::get('motors', [ConfiguratorController::class, 'motor_listaz']);
Route::get('colors', [ConfiguratorController::class, 'color_listaz']);
Route::get('interiors', [ConfiguratorController::class, 'interior_listaz']);
Route::get('felszereless', [ConfiguratorController::class, 'csomag_listaz']);
Route::get('hitels', [ConfiguratorController::class, 'hitel_listaz']);
Route::post('rendelesLeadasa', [ConfiguratorController::class,'rendeles'])->name('rendelesLeadasaName');
Route::get('rendelt', [ConfiguratorController::class, 'rendeltAuto_listaz']);
Route::get('rendeltA', [ConfiguratorController::class, 'rendeltAuto_listaz_Admin']);