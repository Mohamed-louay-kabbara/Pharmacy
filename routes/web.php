<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProblemeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\MedicationController;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('cotigory',CategoryController::class);
Route::get('editprofile/{id}', [AdminController::class,'edit'])->name('profile.edit');
Route::put('saveprofile/{id}', [AdminController::class,'update'])->name('profile.update');
Route::resource('Buy',BuyController::class);
Route::resource('Medication',MedicationController::class);
Route::resource('problem',ProblemeController::class);
Route::get('register', function () {
    return view('auth.register');
})->name('register');
Route::get('Bills', function () {
    return view('Bills');
})->name('Bills');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('rdirect', function () {
    return redirect()->route('dashboard');
})->name('back');
Route::get('show_notifications/{id}',[BuyController::class,'show_notifications'])->name('show_notifications');
Route::post('delete_order/{id}',[BuyController::class,'delete_order'])->name('delete.order');
Route::get('/{page}', [AdminController::class, 'index']);
Route::post('search_name_medications', [MedicationController::class, 'search_name_medication'])->name('search.Medication');
Route::get('search_medications/{id}', [MedicationController::class, 'search_medication'])->name('search.category');
Route::get('show_medications/{id}',[BuyController::class,'show_medications'])->name('show_medications');
Route::delete('delete_notification/{id}',[ProblemeController::class,'delete_notification'])->name('notification.delete');
Route::get('Buy_store/{id}', [BuyController::class, 'store'])->name('Buy_store');
require __DIR__ . '/auth.php';
