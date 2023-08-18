<?php

use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//home 
Route::get('/', [HomeController::class, "index"])->name('home');

//student 
Route::prefix('/student')->group(function(){
    Route::get('/', [StudentController::class, "index"])->name('student');
    Route::post('/store', [StudentController::class, "store"])->name('student.store');

});

//data edit

Route::prefix('/edit')->group(function(){
    Route::get('/', [EditController::class, "edit"])->name('edit');
    Route::get('/{student_id}/delete', [EditController::class, "delete"])->name('edit.delete');
    Route::get('/{student_id}/done', [EditController::class, "done"])->name('edit.done');
    
    Route::get('/model', [EditController::class, "model"])->name('edit.model');
    Route::post('/{student_id}/update', [EditController::class, "update"])->name('edit.update');
});
