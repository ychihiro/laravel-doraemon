<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\EvalueationController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MailController;
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

Route::apiResource('/v1/user', UserController::class)->only(([
    'store'
]));
Route::apiResource('/v1/diagnosis', DiagnosisController::class)->only(([
    'index', 'store', 'show'
]));
Route::apiResource('/v1/like', LikeController::class)->only(([
    'index','show', 'store' , 'destroy'
]));
Route::post('/v1/evalueation', [EvalueationController::class, 'store']);
Route::post('/v1/result', [ResultController::class, 'store']);
Route::get('/v1/result/{id}', [ResultController::class, 'show']);
Route::apiResource('/v1/cart', CartController::class)->only(([
    'index', 'store', 'destroy'
]));
Route::delete('/v1/cart/all-delete/{id}', [CartController::class, 'remove']);
Route::apiResource('/v1/purchase', PurchaseController::class)->only(([
    'index', 'show', 'store', 'update'
]));
Route::post('/v1/payment', [PaymentController::class, 'payment']);
Route::post('/v1/mail', [MailController::class, 'send']);