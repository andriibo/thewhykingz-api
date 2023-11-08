<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
* ###################
* #####  News  #####
* ###################
*/
Route::prefix('news')->group(function (): void {
    Route::get('', App\Http\Controllers\Api\News\News::class);
    Route::get('{id}', \App\Http\Controllers\Api\News\Show::class)->where('id', '[0-9]+');
    Route::patch('{id}/change-status', \App\Http\Controllers\Api\News\ChangeStatus::class);
});
