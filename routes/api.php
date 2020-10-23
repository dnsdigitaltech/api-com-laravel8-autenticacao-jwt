<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\ProductController;

Route::group(['prefix' => 'v1'], function(){
    Route::get('categories/{id}/products', [CategoryController::class, 'products']);
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('products', ProductController::class);
});