<?php

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

// PUBLIC ROUTES
Route::get('/v1/products', [\App\Http\Controllers\ProductsController::class, 'index']);
Route::get('/v1/products/{id}', [\App\Http\Controllers\ProductsController::class, 'show']);
Route::get('/v1/products/search/{name}', [\App\Http\Controllers\ProductsController::class, 'search']);
Route::post('/v1/users/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/v1/users/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('v1/feedbacks', [\App\Http\Controllers\FeedbacksController::class, 'addFeedback']);
Route::get('/v1/feedbacks', [\App\Http\Controllers\FeedbacksController::class, 'getFeedbacks']);


// PRIVATE ROUTES
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('v1/users/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('/v1/users/payinfos', [\App\Http\Controllers\PaymentInfoController::class, 'store']);
    Route::post('/v1/users/payinfos/{id}', [\App\Http\Controllers\PaymentInfoController::class, 'update']);
    Route::post('/v1/users/orders/', [\App\Http\Controllers\OrdersController::class, 'store']);
    Route::delete('/v1/users/orders/{id}', [\App\Http\Controllers\OrdersController::class, 'cancel']);
    Route::get('/v1/users/orders/{id}', [\App\Http\Controllers\OrdersController::class, 'getOrders']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
