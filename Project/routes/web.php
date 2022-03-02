<?php

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

use App\Http\Controllers\StudentController;

Route::get('add-student', [StudentController::class, 'create']);
Route::post('add-student', [StudentController::class, 'store']);

Route::get('students', [StudentController::class, 'index']);
Route::get('edit-student/{id}', [StudentController::class, 'edit']);
Route::put('update-student/{id}', [StudentController::class, 'update']);
Route::get('delete-student/{id}', [StudentController::class, 'destroy']);

Route::get('Med_Dis/{id}', [StudentController::class, 'Medicines_Diseases']);

Route::get('Med_Dis', [StudentController::class, 'dlist']);
