<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
   return view('create');
});

Route::get('indextable',[RegistrationController::class,'IndexTable'])->name('indextable');
Route::get('/create',[RegistrationController::class,'CreateTable'])->name('createtable');
Route::post('/insertregistration',[RegistrationController::class,'insert'])->name('insertregistration');



 
 
 
 
