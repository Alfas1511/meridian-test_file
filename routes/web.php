<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExecutiveController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Login home page routes
Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

// ======= Admin Controller Routes======= //
Route::get('admin-manageExecutives',[AdminController::class,'manageExecutives'])->name('admin.executives');
Route::get('admin-changestatus/{id}',[AdminController::class, 'changeStatus'])->name('admin.changestatus');
Route::get('admin-editexecutives/{id}',[AdminController::class, 'editExecutives'])->name('admin.editexecutives');

Route::get('admin-viewleads',[AdminController::class, 'viewLeads'])->name('admin.viewleads');
Route::post('admin-executiveupdate/{id}',[AdminController::class, 'updateExe'])->name('admin.updateExecutives');

Route::get('admin-changeexecutive/{id}',[AdminController::class, 'changeExecutive'])->name('admin.changeExecutive');
Route::post('admin-changeexecutive',[AdminController::class, 'assignExe'])->name('admin.assignExecutive');




// ========= Executive Controller Route ========== //

// -- add leads
Route::get('executive-leadAddPage',[ExecutiveController::class,'addLead'])->name('executive.addlead');
Route::post('executive-leadStore',[ExecutiveController::class,'storeLead'])->name('executive.storelead');

// --delete leads
Route::get('/executive-leadDelete/{id}',[ExecutiveController::class,'deleteLead'])->name('executive.deletelead');

// --update leads
Route::get('/executive-editLeadpage/{id}',[ExecutiveController::class, 'editpage'])->name('executive.editpage');
Route::post('executive-updatedLead/{id}',[ExecutiveController::class, 'updateLead'])->name('executive.updatelead');



// ========= Profile Controller ========== //
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
