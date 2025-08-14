<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


Route::get('/menu', function () {
    $records = [
        ['permissions' => ['report-list', 'report-create', 'report-edit', 'report-delete']],
    ];

    foreach ($records as $record) {

        foreach ($record['permissions'] as $permission) {
            $exists = DB::table('permissions')
                ->where('name', $permission)
                ->where('guard_name', 'web')
               // ->where('menu_id', $menuId)
                ->exists();

            if (!$exists) {
                DB::table('permissions')->insert([
                    'name' => $permission,
                    'guard_name' => 'web',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

    return "All menus and permissions created successfully!";
});
 Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
});

Route::rescource('category', CategoryController::class)->names('categories');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard.dashboard');
    })->name('dashboard.dashboard');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


include 'admin.php';
