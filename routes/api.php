<?php

use App\Http\Controllers\MyFatoorahControlller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/pay', [MyFatoorahControlller::class, 'pay']);
Route::get('/error-pay', [MyFatoorahControlller::class, 'errorPay']);
Route::get('/success-pay', [MyFatoorahControlller::class, 'successPay']);
