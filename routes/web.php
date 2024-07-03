<?php

use Illuminate\Support\Facades\Route;
use App\Http\API\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ElabelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GeographicalIndicationController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\RecyclingRuleContainersController;
use App\Http\Controllers\RecyclingRuleMaterialsController;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::get('/users', [UserController::class, 'all']);    
Route::post('/user', [UserController::class, 'update']);  
Route::get('/current-user', [UserController::class, 'current']);  
Route::post('/elabel', [ElabelController::class, 'save']);  
Route::get('/elabels', [ElabelController::class, 'all']);  
Route::get('/elabel/{token}', [ElabelController::class, 'getByToken']);  
Route::get('/category', [CategoryController::class, 'all']);  
Route::get('/geo', [GeographicalIndicationController::class, 'all']);  
Route::get('/packages', [PackagesController::class, 'all']);  
Route::get('/product-types', [ProductTypeController::class, 'all']);  
Route::get('/containers', [RecyclingRuleContainersController::class, 'all']);  
Route::get('/materials', [RecyclingRuleMaterialsController::class, 'all']);  