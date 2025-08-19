<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;


// Route::get('/menu', function () {
//     $records = [
//         ['permissions' => ['report-list', 'report-create', 'report-edit', 'report-delete']],
//     ];

//     foreach ($records as $record) {

//         foreach ($record['permissions'] as $permission) {
//             $exists = DB::table('permissions')
//                 ->where('name', $permission)
//                 ->where('guard_name', 'web')
//                // ->where('menu_id', $menuId)
//                 ->exists();

//             if (!$exists) {
//                 DB::table('permissions')->insert([
//                     'name' => $permission,
//                     'guard_name' => 'web',
//                     'created_at' => now(),
//                     'updated_at' => now(),
//                 ]);
//             }
//         }
//     }

//     return "All menus and permissions created successfully!";
// });

 Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
});

Route::resource('category', CategoryController::class)->names('categories');

Route::resource('city', CityController::class)->names('cities');

Route::resource('countries', CountryController::class)->names('countries');
Route::resource('qualifications', QualificationController::class)->names('qualifications');
Route::resource('skills', SkillController::class)->names('skills');
Route::resource('states', StateController::class)->names('states');
Route::resource('jobs', JobController::class)->names('jobs');
Route::resource('users', UserController::class)->names('users');
Route::resource('roles', RoleController::class)->names('roles');




Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard.dashboard');
    })->name('dashboard.dashboard');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


include 'admin.php';
