<?php

use App\Http\Controllers\CrudController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CrudController::class,'showData'])->name('showData');
Route::get('/add-data',[CrudController::class,'addData'])->name('addData');
Route::post('/store-data',[CrudController::class,'storeData'])->name('storeData');
Route::get('/edit-data/{id}', [CrudController::class, 'editData'])->name('editData');  // Show edit form
Route::post('/update-data/{id}', [CrudController::class, 'updateData'])->name('updateData');  // Handle the update
Route::get('/delete-data/{id}', [CrudController::class, 'deleteData'])->name('deleteData');

