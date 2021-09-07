<?php

use App\Http\Controllers\ReccaTest;
use Illuminate\Http\Request;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::get('q1/{input}',[ReccaTest::class,"q1"]);
Route::get('q2/{input}',[ReccaTest::class,"q2"]);
Route::get('q3/{input}',[ReccaTest::class,"q3"]);
Route::get('q4/{input}',[ReccaTest::class,"q4"]);

