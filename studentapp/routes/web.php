<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// home
Route::get('/', [HomeController::class, 'index'])->name('Dashboard');


// student
Route::prefix('/student') -> group( function(){
    Route::get('/', [StudentController::class, 'index'])->name('student');
    Route::post('/store', [StudentController::class, 'store'])->name('student.store');
    Route::get('/{s_id}/delete', [StudentController::class, 'delete'])->name('student.delete');
    Route::get('/{s_id}/done', [StudentController::class, 'done'])->name('student.done');
});

require __DIR__.'/auth.php';