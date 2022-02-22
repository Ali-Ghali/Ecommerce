<?php

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

define('PAGINATION_COUNT', 10);
Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
    // Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

    ######################### Begin Languages Route ########################
    Route::group(['prefix' => 'languages'], function () {
        Route::get('/', [App\Http\Controllers\Admin\LanguagesController::class, 'index'])->name('admin.languages');
        Route::get('create', [App\Http\Controllers\Admin\LanguagesController::class, 'create'])->name('admin.languages.create');
        Route::post('store', [App\Http\Controllers\Admin\LanguagesController::class, 'store'])->name('admin.languages.store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\LanguagesController::class, 'edit'])->name('admin.languages.edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\LanguagesController::class, 'update'])->name('admin.languages.update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\LanguagesController::class, 'destroy'])->name('admin.languages.delete');
    });
    ######################### End Languages Route ########################

    ######################### Begin Main Categoris Routes ########################
    Route::group(['prefix' => 'main_categories'], function () {
        Route::get('/', [App\Http\Controllers\Admin\MainCategoriesController::class, 'index'])->name('admin.maincategories');
        Route::get('create', [App\Http\Controllers\Admin\MainCategoriesController::class, 'create'])->name('admin.maincategories.create');
        Route::post('store', [App\Http\Controllers\Admin\MainCategoriesController::class, 'store'])->name('admin.maincategories.store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\MainCategoriesController::class, 'edit'])->name('admin.maincategories.edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\MainCategoriesController::class, 'update'])->name('admin.maincategories.update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\MainCategoriesController::class, 'destroy'])->name('admin.maincategories.delete');
        Route::get('changeStatus/{id}', [App\Http\Controllers\Admin\MainCategoriesController::class, 'changeStatus'])->name('admin.maincategories.status');
    });
    ######################### End  Main Categoris Routes  ########################

    ######################### Begin vendors Routes ########################
    Route::group(['prefix' => 'vendors'], function () {
        Route::get('/', [App\Http\Controllers\Admin\VendorsController::class, 'index'])->name('admin.vendors');
        Route::get('create', [App\Http\Controllers\Admin\VendorsController::class, 'create'])->name('admin.vendors.create');
        Route::post('store', [App\Http\Controllers\Admin\VendorsController::class, 'store'])->name('admin.vendors.store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\VendorsController::class, 'edit'])->name('admin.vendors.edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\VendorsController::class, 'update'])->name('admin.vendors.update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\VendorsController::class, 'destroy'])->name('admin.vendors.delete');
        Route::get('changeStatus/{id}', [App\Http\Controllers\Admin\VendorsController::class, 'changeStatus'])->name('admin.vendors.status');
    });
    ######################### End  vendors Routes  ########################

    ######################### Begin Sub Categoris Routes ########################
    Route::group(['prefix' => 'sub_categories'], function () {
        Route::get('/', [App\Http\Controllers\Admin\SubCategoriesController::class, 'index'])->name('admin.subcategories');
        Route::get('create', [App\Http\Controllers\Admin\SubCategoriesController::class, 'create'])->name('admin.subcategories.create');
        Route::post('store', [App\Http\Controllers\Admin\SubCategoriesController::class, 'store'])->name('admin.subcategories.store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\SubCategoriesController::class, 'edit'])->name('admin.subcategories.edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\SubCategoriesController::class, 'update'])->name('admin.subcategories.update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\SubCategoriesController::class, 'destroy'])->name('admin.subcategories.delete');
        Route::get('changeStatus/{id}', [App\Http\Controllers\Admin\SubCategoriesController::class, 'changeStatus'])->name('admin.subcategories.status');
    });
    ######################### End  Sub Categoris Routes  ########################

});

Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin'], function () {
    //  Route::get('login', 'LoginController@getLogin')->name('get.admin.login');
    Route::get('login', [App\Http\Controllers\Admin\LoginController::class, 'getLogin'])->name('get.admin.login');
    // Route::post('login', 'LoginController@login')->name('admin.login');
    Route::post('login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');
});