<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/listing', [App\Http\Controllers\HomeController::class, 'listing'])->name('home.listing');
Route::get('/about', function () {
    return view('about');
});
Route::get('/participate', function () {
    return view('dashboard.register');
});


//INSTRUCTOR
Route::post('/dashboard/subscribe', [App\Http\Controllers\InstructorController::class, 'create'])->name('dashboard.instructor.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/listing/{id}/post', [App\Http\Controllers\HomeController::class, 'view'])->name('home.single');
    Route::get('/listing/{id}/sort', [App\Http\Controllers\HomeController::class, 'sort'])->name('home.sort');
    Route::get('/location/{id}', [App\Http\Controllers\HomeController::class, 'location'])->name('home.location');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/{user}/profile', [App\Http\Controllers\DashboardController::class, 'show'])->name('dashboard.profile');
Route::put('/dashboard/{user}/profile/update', [App\Http\Controllers\DashboardController::class, 'update'])->name('dashboard.profile.update');


Route::get('/dashboard/{user}/biodata', [App\Http\Controllers\BiodataController::class, 'index'])->name('dashboard.biodata');
Route::post('/dashboard/biodata/store', [App\Http\Controllers\BiodataController::class, 'create'])->name('dashboard.biodata.store');
Route::get('/dashboard/{user}/biodata/edit', [App\Http\Controllers\BiodataController::class, 'edit'])->name('dashboard.biodata.edit');
Route::put('/dashboard/{biodata}/biodata/update', [App\Http\Controllers\BiodataController::class, 'update'])->name('dashboard.biodata.update');

Route::post('/cart/store', [App\Http\Controllers\CartController::class, 'create'])->name('cart.store');
Route::post('/cart/inspection', [App\Http\Controllers\InspectionController::class, 'inspection'])->name('cart.inspection');
Route::delete('/cart/{cart}/destroy', [App\Http\Controllers\CartController::class, 'delete'])->name('cart.destroy');
Route::delete('/cart/{cart}/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/{id}/shopping-cart', [App\Http\Controllers\CartController::class, 'view'])->name('cart.view');
Route::get('/inspection-cart/{id}/shopping-cart', [App\Http\Controllers\InspectionController::class, 'view'])->name('inspection.v
iew');
Route::delete('/inspection/{inspection}/destroy', [App\Http\Controllers\InspectionController::class, 'delete'])->name('inspection.destroy');
Route::post('/verify-payment', [App\Http\Controllers\InspectionController::class, 'verify'])->name('inspection.verify');
Route::get('/dashboard/manage-inspection', [App\Http\Controllers\InspectionController::class, 'index'])->name('dashboard.manage-inspection');
Route::get('/dashboard/manage-inspection/pending', [App\Http\Controllers\InspectionController::class, 'pending'])->name('dashboard.manage-inspection-pending');

Route::get('/dashboard/inspection/awaiting-payment', [App\Http\Controllers\InspectionController::class, 'wishlist'])->name('dashboard.inspection-awaiting-payt');

Route::put('/inspection/{inspection}/visit', [App\Http\Controllers\InspectionController::class, 'visit'])->name('dashboard.visit.update');
});

Route::delete('/inspection/{inspection}/destroy', [App\Http\Controllers\InspectionController::class, 'destroy'])->name('inspection.destroy');

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

    Route::get('/dashboard/create-post', [App\Http\Controllers\PostController::class, 'create'])->name('dashboard.create-post');
    Route::post('/dashboard/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('dashboard.post.store');
    Route::get('/dashboard/manage-post', [App\Http\Controllers\PostController::class, 'show'])->name('dashboard.manage-post');
    Route::get('/dashboard/{id}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('dashboard.edit-post');
    Route::put('/dashboard/{id}/post/update', [App\Http\Controllers\PostController::class, 'update'])->name('dashboard.post.update');
    Route::delete('/dashboard/{id}/post/destroy', [App\Http\Controllers\PostController::class, 'destroy'])->name('dashboard.post.destroy');


    //Route::get('/dashboard/{user}/users', [App\Http\Controllers\UserController::class, 'edit'])->name('dashboard.edit');
    Route::delete('/dashboard/{user}/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('dashboard.destroy');


    Route::get('dashboard/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('dashboard.categories');
    Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('dashboard.editcategory');
    Route::put('/category/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('dashboard.category.update');
    Route::delete('/category/{category}/destroy', [App\Http\Controllers\CategoryController::class, 'delete'])->name('dashboard.category.destroy');


    Route::post('/role/store', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
    Route::get('/role/{role}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('dashboard.editrole');
    Route::put('/role/{role}/update', [App\Http\Controllers\RoleController::class, 'update'])->name('dashboard.role.update');
    Route::delete('/role/{role}/destroy', [App\Http\Controllers\RoleController::class, 'delete'])->name('dashboard.role.destroy');

    //FAQs
    Route::get('dashboard/faq', [App\Http\Controllers\FaqController::class, 'index'])->name('dashboard.faq');
    Route::post('/faq/store', [App\Http\Controllers\FaqController::class, 'store'])->name('faq.store');
    Route::get('/faq/{faq}/edit', [App\Http\Controllers\FaqController::class, 'edit'])->name('dashboard.editfaq');
    Route::put('/faq/{faq}/update', [App\Http\Controllers\FaqController::class, 'update'])->name('dashboard.faq.update');
    Route::delete('/faq/{faq}/destroy', [App\Http\Controllers\FaqController::class, 'delete'])->name('dashboard.faq.destroy');

    //EVENTS
    Route::get('/dashboard/create-event', [App\Http\Controllers\EventController::class, 'create'])->name('dashboard.create-event');
    Route::post('/dashboard/event/store', [App\Http\Controllers\EventController::class, 'store'])->name('dashboard.event.store');
    Route::get('/dashboard/manage-event', [App\Http\Controllers\EventController::class, 'show'])->name('dashboard.manage-event');
    Route::get('/dashboard/{event}/edit-event', [App\Http\Controllers\EventController::class, 'edit'])->name('dashboard.edit-event');
    Route::put('/dashboard/{id}/event/update', [App\Http\Controllers\EventController::class, 'update'])->name('dashboard.event.update');
    Route::delete('/dashboard/{id}/event/destroy', [App\Http\Controllers\EventController::class, 'destroy'])->name('dashboard.event.destroy');

    

});

Route::middleware(['auth', 'can:view,user'])->group(function(){

    Route::get('/dashboard/{user}/profile', [App\Http\Controllers\DashboardController::class, 'show'])->name('dashboard.profile');

});
