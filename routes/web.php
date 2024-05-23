<?php

use App\Http\Controllers\TasksController;
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

// Route::prefix('tasks')->group(function(){
//     Route::resource('/',[TasksController::class,'index']);
//     Route::get('Create_task',[TasksController::class,'create']);
// });
Route::get('/',[TasksController::class,'index'])->name('tasks.index');
Route::get('create',[TasksController::class,'create'])->name('tasks.create');
Route::post('create',[TasksController::class,'store'])->name('tasks.store');
Route::get('update/{id}',[TasksController::class,'update'])->name('tasks.update');
Route::get('delete/{id}',[TasksController::class,'destroy'])->name('tasks.delete');
Route::get('task_detail/{id}',[TasksController::class,'show'])->name('tasks.show');
Route::get('edit/{id}',[TasksController::class,'edit'])->name('tasks.edit');
Route::post('edit/{id}',[TasksController::class,'edit_post'])->name('tasks.edit_post');
// Route::prefix('tasks')->group(function() {

//   Route::get('index', [TasksController::class, 'index'])->name('tasks.index');

// });

// Route::resource('tasks',TasksController::class)->except('show');
// Route::post('store',[TasksController::class,'store']);
