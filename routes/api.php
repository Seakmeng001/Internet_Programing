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

Route::get('/h1', function(){
    return "hey";
});

Route::get('/hello', function(){
    return "hey";
});

// Route::get('/categories',[CategoryController::class, 'getCategories']);
// Route::get('/categories',[CategoryController::class, 'createCategory']);  
// Route::get('/categories/{categoryID}',[CategoryController::class, 'getCategories']);
// Route::get('/categories{categoryID',[CategoryController::class, 'updateCategories']);
// Route::get('/categories{categoryID}',[CategoryController::class, 'deleteCategories']);
// Route::get('/categories{categoryID}/products',[CategoryController::class, 'getproductsOfCategory']);


// Route::get('/products',[ProductController::class, 'getProducts']);
// Route::get('/products',[ProductController::class, 'createProducts']);
// Route::get('/products{productID}',[ProductController::class, 'getProducts']);
// Route::get('/products{productID',[ProductController::class, 'updateProducts']);
// Route::get('/products{productID',[ProductController::class, 'deleteProducts']);
    
  

    
