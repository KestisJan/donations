<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Route
Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    // Assign Permissions to Roles
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    // Revoke Permissions to Roles
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    // User Routes - Index
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    // User Routes - Show
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    // User Routes - Destroy
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    // User Routes - Assign Role
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    // User Routes - Remove Role
    Route::post('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    // User Routes - Assign Permissions
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    // User Routes - Remove Permissions
    Route::post('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');
    // Post Routes - Index
    Route::resource('/posts', PostController::class);
});



require __DIR__.'/auth.php';
