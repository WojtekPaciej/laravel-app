<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

Route::get('/paciej/305430/people',[PeopleController::class,'index']);
Route::post('/paciej/305430/people', [PeopleController::class, 'store']);
Route::get('/paciej/305430/people/{people}',[PeopleController::class,'show']);
Route::delete('/paciej/305430/people/{people}', [PeopleController::class, 'delete']);
Route::put('/paciej/305430/people/{people}', [PeopleController::class, 'update']);