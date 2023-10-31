<?php

 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;         
use App\Http\Controllers\EmployeeController;
  
  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group that
| contains the "web" middleware group. Now create something great!
|
*/
  
Route::resource('products', ProductController::class);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    // Route::get('/index', function (){return view('dashboard');})
    Route::get('/', [EmployeeController::class, 'index'])->name('dashboard');;
    Route::post('/store', [EmployeeController::class, 'store'])->name('store');
    Route::get('/fetchall', [EmployeeController::class, 'fetchAll'])->name('fetchAll');
    Route::delete('/delete', [EmployeeController::class, 'delete'])->name('delete');
    Route::get('/edit', [EmployeeController::class, 'edit'])->name('edit');
    Route::post('/update', [EmployeeController::class, 'update'])->name('update');
});
