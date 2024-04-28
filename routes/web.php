<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class,'index']
)->name('todo.home');

Route::get('/create',function(){
    return view('create');
})->name('todo.create');

Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('todo.edit');


//update todo data route
Route::post('/update', [TodoController::class, 'updateData'])->name("todo.updateData");

//create todo route
Route::post('/create',[TodoController::class,'store'])->name('todo.store');

//delete todo route
Route::get('/delete/{id}',[TodoController::class,'delete'])->name('todo.delete');