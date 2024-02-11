<?php

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


Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create-student', [App\Http\Controllers\StudentController::class, 'create_student'])->name('create.student');
Route::post('/create-student', [App\Http\Controllers\StudentController::class, 'store_student'])->name('store.student');
Route::get('/', [App\Http\Controllers\StudentController::class, 'student_list'])->name('student.list');
Route::get('/student/{id}', [App\Http\Controllers\StudentController::class, 'student_edit'])->name('student.edit');
Route::put('/student-update/{id}', [App\Http\Controllers\StudentController::class, 'student_update'])->name('student.update');
Route::delete('/student-delete/{id}', [App\Http\Controllers\StudentController::class, 'student_delete'])->name('student.delete');
Route::get('/about_us', [App\Http\Controllers\StudentController::class, 'about']);
