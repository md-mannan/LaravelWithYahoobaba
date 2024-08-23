<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('add', function () {
    return view('Add');
})->name('add');
Route::controller(StudentController::class)->group(function () {
    Route::get('/', 'ShowAll')->name('home');
    Route::post('insert', 'addStudent')->name('insert');
    Route::get('view/{id}', 'viewStudent')->name('view');
    Route::get('edit/{id}', 'editStudent')->name('edit');
    Route::PUT('update/{id}', 'updateStudent')->name('update');
    Route::get('delete/{id}', 'deleteStudent')->name('delete');
    Route::get('deleteall', 'deleteAllStudent')->name('deleteAll');
});
