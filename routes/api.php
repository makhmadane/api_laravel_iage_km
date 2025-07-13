<?php

use App\Http\Controllers\productController;
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

Route::get('products', [productController::class, 'index']); // Get all products
Route::post('products', [productController::class, 'store']); // Add a new product
Route::get('products/{id}', [productController::class, 'show']); // Get a single product
Route::put('products/{id}', [productController::class, 'update']); // Update a product
Route::delete('products/{id}', [productController::class, 'destroy']); // Delete a product

