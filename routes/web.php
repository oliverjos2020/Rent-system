<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/listing', [App\Http\Controllers\HomeController::class, 'listing'])->name('home.listing');
Route::get('/listing/{id}/property', [App\Http\Controllers\HomeController::class, 'view'])->name('home.single');
Route::get('/listing/{id}/sort', [App\Http\Controllers\HomeController::class, 'sort'])->name('home.sort');

Route::middleware(['auth'])->group(function () {
    
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/{user}/profile', [App\Http\Controllers\DashboardController::class, 'show'])->name('dashboard.profile');
Route::put('/dashboard/{user}/profile/update', [App\Http\Controllers\DashboardController::class, 'update'])->name('dashboard.profile.update');



});

Route::middleware(['role:Admin','auth'])->group(function(){

    Route::get('/dashboard/users', [App\Http\Controllers\UserController::class, 'show'])->name('dashboard.users');
    Route::put('/dashboard/{user}/role/attach', [App\Http\Controllers\UserController::class, 'attach'])->name('user.role.attach');
    Route::put('/dashboard/{user}/role/detach', [App\Http\Controllers\UserController::class, 'detach'])->name('user.role.detach');
    Route::get('/dashboard/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('dashboard.roles');


    Route::get('/dashboard/location', [App\Http\Controllers\LocationController::class, 'index'])->name('dashboard.location');
    Route::post('/dashboard/location/store', [App\Http\Controllers\LocationController::class, 'store'])->name('dashboard.location.store');
    Route::get('/dashboard/{location}/location/edit', [App\Http\Controllers\LocationController::class, 'edit'])->name('dashboard.editlocation');
    Route::put('/dashboard/{location}/location/update', [App\Http\Controllers\LocationController::class, 'update'])->name('dashboard.updatelocation');
    Route::delete('/dashboard/{location}/location/destroy', [App\Http\Controllers\LocationController::class, 'delete'])->name('dashboard.location.destroy');

    Route::get('/dashboard/create-property', [App\Http\Controllers\PropertyController::class, 'create'])->name('dashboard.create-property');
    Route::post('/dashboard/property/store', [App\Http\Controllers\PropertyController::class, 'store'])->name('dashboard.property.store');
    Route::get('/dashboard/manage-property', [App\Http\Controllers\PropertyController::class, 'show'])->name('dashboard.manage-property');
    Route::get('/dashboard/{id}/edit', [App\Http\Controllers\PropertyController::class, 'edit'])->name('dashboard.edit-property');
    Route::put('/dashboard/{id}/property/update', [App\Http\Controllers\PropertyController::class, 'update'])->name('dashboard.property.update');
    Route::delete('/dashboard/{id}/property/destroy', [App\Http\Controllers\PropertyController::class, 'destroy'])->name('dashboard.property.destroy');


    //Route::get('/dashboard/{user}/users', [App\Http\Controllers\UserController::class, 'edit'])->name('dashboard.edit');
    Route::delete('/dashboard/{id}/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('dashboard.destroy');


    Route::get('dashboard/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('dashboard.categories');
    Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('dashboard.editcategory');
    Route::put('/category/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('dashboard.category.update');
    Route::delete('/category/{category}/destroy', [App\Http\Controllers\CategoryController::class, 'delete'])->name('dashboard.category.destroy');


    Route::post('/role/store', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
    Route::get('/role/{role}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('dashboard.editrole');
    Route::put('/role/{role}/update', [App\Http\Controllers\RoleController::class, 'update'])->name('dashboard.role.update');
    Route::delete('/role/{role}/destroy', [App\Http\Controllers\RoleController::class, 'delete'])->name('dashboard.role.destroy');

});

Route::middleware(['auth', 'can:view,user'])->group(function(){

    Route::get('/dashboard/{user}/profile', [App\Http\Controllers\DashboardController::class, 'show'])->name('dashboard.profile');
});