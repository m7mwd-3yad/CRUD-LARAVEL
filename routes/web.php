<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {
    Route::get("/index", [AdminController::class, 'index'])->name('admin.index');
    Route::get("/create", [AdminController::class, 'create'])->name('admin.create');
    Route::post("/store", [AdminController::class, 'store'])->name('admin.store');

    //Routes with id
    Route::get("/edit/{id}", [AdminController::class, 'edit'])->name('admin.edit');
    Route::post("/update/{id}", [AdminController::class, 'update'])->name('admin.update');
    Route::get("/show/{id}", [AdminController::class, 'show'])->name('admin.show');
    Route::get("/destroy/{id}", [AdminController::class, 'destroy'])->name('admin.destroy');

});


