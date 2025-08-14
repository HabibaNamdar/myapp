<?php
 namespace  App\Http\Controllers\Admin; 
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;

  

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('roles', RoleController::class)->names('admin.roles');
    Route::resource('users', UserController::class)->names('admin.users');
}); 