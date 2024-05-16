<?php

use App\Http\Controllers\LangsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard' , [LangsController::class ,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth', 'verified')->group(function(){

    Route::get('/dashboard2/{id}' , [LangsController::class ,'dashboard2'])->name('dashboard2');
    Route::get('/dashboard' , [LangsController::class ,'dashboard'])->name('dashboard');

    //
    Route::get('/footer/{id}' , [LangsController::class ,'footer'])->name('footer');
    Route::get('/dashboard/AddLanguage' , [LangsController::class ,'langadd'])->name('langAdd') ; //langAdd
    Route::get('/dashboard/AddPart' , [LangsController::class ,'AddPart'])->name('AddPart') ;
    Route::get('/AddLesson/{id}' , [LangsController::class ,'AddLesson'])->name('AddLesson') ;
    Route::get('/DeleteLang/{id}' , [LangsController::class ,'DeleteLang'])->name('DeleteLang') ;
    Route::get('/DeleteMenu/{id}' , [LangsController::class ,'DeleteMenu'])->name('DeleteMenu') ;
    Route::get('/DeleteLesson/{id}' , [LangsController::class ,'DeleteLesson'])->name('DeleteLesson') ;
    Route::get('/UpdateLesson2/{id}' , [LangsController::class ,'UpdateLesson2'])->name('UpdateLesson2') ;

    



});

//DeleteLang


Route::middleware('auth' , 'verified')->group(function(){

    // Route::post('/insertpart' , [LangsController::class ,'insertpart'])->name('insertpart') ;
    Route::match(['get', 'post'] , '/insertpart', [LangsController::class,'insertpart'])->name('insertpart');
    Route::match(['get', 'post'] , '/insertlang' , [LangsController::class ,'insertlang'])->name('insertlang') ;
    Route::match(['get', 'post'] , '/AddLesson2/{id}' , [LangsController::class ,'AddLesson2'])->name('AddLesson2') ;
    Route::match(['get', 'post'] , '/UpdateLesson/{id}' , [LangsController::class ,'UpdateLesson'])->name('UpdateLesson') ;

});


require __DIR__.'/auth.php';









// AddLesson



