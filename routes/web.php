<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\DisciplinaryController;
use App\Http\Controllers\InstructorDisciplineController;
use App\Http\Controllers\SchoolClassController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
//Aluno 
// Route::delete('/users/{id}', [UserController::class, 'delete'])->name('users.delete');
// Route::put('/users/{id}', [UserController::class,'update'])->name('users.update');
// Route::get('/users/{id}/edit', [UserController::class,'edit'])->name('users.edit');
// Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
// Route::post('/users', [UserController::class, 'store'])->name('users.store');
// Route::get('/users/{id}', ]UserController::class, 'show'])->name('users.show');
Route::resource('users', UserController::class);

//Instructors
Route::delete('/instructors/{id}', [InstructorController::class, 'delete'])->name('instructors.delete');
Route::put('/instructors/{id}', [InstructorController::class,'update'])->name('instructors.update');
Route::get('/instructors/{id}/edit', [InstructorController::class,'edit'])->name('instructors.edit');
Route::get('/instructors', [InstructorController::class, 'index'])->name('instructors.index');
Route::get('/instructors/create', [InstructorController::class, 'create'])->name('instructors.create');
Route::post('/instructors', [InstructorController::class, 'store'])->name('instructors.store');
Route::get('/instructors/{id}', [InstructorController::class, 'show'])->name('instructors.show');

//Disciplinarys
Route::delete('/disciplinarys/{id}', [DisciplinaryController::class, 'delete'])->name('disciplinarys.delete');
Route::put('/disciplinarys/{id}', [DisciplinaryController::class,'update'])->name('disciplinarys.update');
Route::get('/disciplinarys/{id}/edit', [DisciplinaryController::class,'edit'])->name('disciplinarys.edit');
Route::get('/disciplinarys', [DisciplinaryController::class, 'index'])->name('disciplinarys.index');
Route::get('/disciplinarys/create', [DisciplinaryController::class, 'create'])->name('disciplinarys.create');
Route::post('/disciplinarys', [DisciplinaryController::class, 'store'])->name('disciplinarys.store');
Route::get('/disciplinarys/{id}', [DisciplinaryController::class, 'show'])->name('disciplinarys.show');

//InstructorDiscipline
Route::resource('instructor_discipline', InstructorDisciplineController::class)->except('show','delete');

//SchoolClass
Route::resource('school_class', SchoolClassController::class);

Route::get('/', function () {
    return view('welcome');
});
