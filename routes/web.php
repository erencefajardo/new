<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController:: class, 'index'])->name('list');
Route::get('add', [StudentController:: class, 'create']);
Route::post('adding', [StudentController:: class, 'store']);
Route::get('view-record/{id}', [StudentController:: class, 'show']);
Route::get('edit-record/{id}', [StudentController:: class, 'edit']);
Route::post('update-record/{id}', [StudentController:: class, 'update']);
Route::get('delete-record/{id}', [StudentController:: class, 'destroy']);