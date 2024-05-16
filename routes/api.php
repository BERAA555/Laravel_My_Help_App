<?php

use App\Http\Controllers\api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth')->group(function(){
    
    Route::get('/langs', [ApiController::class,'langs'])->name('langs');
    Route::get('/parts/{id}', [ApiController::class,'parts'])->name('parts');
    Route::get('/contents/{id}', [ApiController::class,'contents'])->name('contents');

// });