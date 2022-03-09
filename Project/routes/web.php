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

use App\Http\Controllers\MedicalController;

Route::get('add-doctors', [MedicalController::class, 'create']);
Route::post('add-doctors', [MedicalController::class, 'store']);

Route::get('doctors', [MedicalController::class, 'index']);
Route::get('edit-doctors/{id}', [MedicalController::class, 'edit']);
Route::put('update-doctors/{id}', [MedicalController::class, 'update']);
Route::get('delete-doctors/{id}', [MedicalController::class, 'destroy']);

Route::get('add-med', [MedicalController::class, 'create_med']);
Route::post('add-med', [MedicalController::class, 'store_med']);

Route::get('med', [MedicalController::class, 'index_med']);
Route::get('edit-med/{id}', [MedicalController::class, 'edit_med']);
Route::put('update-med/{id}', [MedicalController::class, 'update_med']);
Route::get('delete-med/{id}', [MedicalController::class, 'destroy_med']);

Route::get('add-dis', [MedicalController::class, 'create_dis']);
Route::post('add-dis', [MedicalController::class, 'store_dis']);

Route::get('dis', [MedicalController::class, 'index_dis']);
Route::get('edit-dis/{id}', [MedicalController::class, 'edit_dis']);
Route::put('update-dis/{id}', [MedicalController::class, 'update_dis']);
Route::get('delete-dis/{id}', [MedicalController::class, 'destroy_dis']);

Route::get('Med_Dis/{id}', [MedicalController::class, 'Medicines_Diseases']);

Route::get('Med_Dis', [MedicalController::class, 'MeDis']);//dlist
Route::post('Med_Dis', [MedicalController::class, 'store_MeDis']);//dlist destroy_md

Route::get('destroy_md/{id}', [MedicalController::class, 'destroy_md']);