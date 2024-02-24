<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
/*
Route::get('/', function () {
    return view('task.index');
});
*/
Route::get('/',[TaskController::class,'index']);
Route::post('/',[TaskController::class,'store']);
Route::delete('/{id}',[TaskController::class,'destroy'])->name('task.destroy');

