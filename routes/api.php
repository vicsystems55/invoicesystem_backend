<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\API\V1\UserController;
use App\Http\Controllers\API\V1\ApiAuthController;
use App\Http\Controllers\API\V1\InvoiceController;
use App\Http\Controllers\API\V1\ProductController;
use App\Http\Controllers\API\V1\InvoiceItemController;
use App\Http\Controllers\API\V1\ProductOrderController;
use App\Http\Controllers\API\V1\ProductCategoryController;

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

// Route::post('/register', [ApiAuthController::class, 'register']);



Route::group([
    'prefix' => '/v1',
  ], function () {

        Route::post('register', [ApiAuthController::class, 'register']);

        Route::post('login', [ApiAuthController::class, 'login']);

        Route::get('users', [UserController::class, 'users']);



      Route::apiResource('products', ProductController::class);

      Route::get('productsx', [ProductController::class,'products']);


      Route::post('initiate-pay', [PaymentController::class, 'initiatepay']);


      Route::apiResource('product-order', ProductOrderController::class)->middleware('auth:sanctum');

      Route::get('mobile-product-order', [ProductOrderController::class, 'mobileProductOrder']);


      Route::apiResource('product-category', ProductCategoryController::class)->middleware('auth:sanctum');

      Route::apiResource('invoices', InvoiceController::class)->middleware('auth:sanctum');

      Route::apiResource('invoice-lines', InvoiceItemController::class)->middleware('auth:sanctum');






  });
