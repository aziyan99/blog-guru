<?php

use App\Http\Controllers\Backend\AssignPermissionController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ResetPasswordUserController;
use App\Http\Controllers\Backend\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return response()->json(['msg' => 'Hello world!']);
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::group(['prefix' => 'backend', 'as' => 'backend.', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/profile/{id}/index', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile/update/{id}', [ProfileController::class, 'updateGeneralInformation'])->name('profile.update.information');
    Route::put('/profile/update/password/{id}', [ProfileController::class, 'updatePassword'])->name('profile.update.password');
    Route::post('/profile/update/image', [ProfileController::class, 'updateImage'])->name('profile.update.image');

    Route::resource('roles', RoleController::class, [
        'except' => ['show']
    ]);

    Route::resource('/permissions', PermissionController::class, [
        'except' => ['show']
    ]);

    Route::group(['prefix' => 'assignpermission'], function () {
        Route::get('/', [AssignPermissionController::class, 'index'])->name('assignpermission.index');
        Route::get('/{role}/edit', [AssignPermissionController::class, 'editRolePermission'])->name('assignpermission.edit');
        Route::post('/updaterolepermission', [AssignPermissionController::class, 'updateRolePermission'])->name('assignpermission.update');
    });

    Route::resource('/users', UserController::class);
    Route::put('/users/{user}/resetpassword', [ResetPasswordUserController::class, 'resetPassword'])->name('users.reset.password');

    Route::group(['prefix' => 'settings'], function () {
        Route::get('/index', [SettingController::class, 'index'])->name('setting.index');
        Route::put('/updateinformation/{setting}/', [SettingController::class, 'updateInformation'])->name('setting.update.information');
        Route::put('/updatelogo/{setting}/', [SettingController::class, 'updateLogo'])->name('setting.update.logo');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
