<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Auth::routes(['register' => false]);
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
});

Route::post('/logout', 'App\Http\Controllers\Auth\LogoutController')->name('logout');





Route::group(['namespace' => 'App\Http\Controllers\Admin'], function () {

    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {



        Route::get('/main', 'MainController')->name('admin.main');

        Route::group(['namespace' => 'Product', 'prefix' => 'product'], function () {
            Route::get('/index', 'IndexController')->name('admin.product.index');
            Route::get('/main', 'MainController')->name('admin.product.main');
            Route::get('/create', 'CreateController')->name('admin.product.create');
            Route::post('/add', 'StoreController')->name('admin.product.store');
            Route::get('/{product}', 'ShowController')->name('admin.product.show');
            Route::get('/{product}/edit', 'EditController')->name('admin.product.edit');
            Route::patch('/{product}', 'UpdateController')->name('admin.product.update');
            Route::delete('/{product}', 'DeleteController')->name('admin.product.delete');
        });

        Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
            Route::get('/index', 'IndexController')->name('admin.category.index');
            Route::get('/create', 'CreateController')->name('admin.category.create');
            Route::post('/add', 'StoreController')->name('admin.category.store');
            Route::get('/{category}', 'ShowController')->name('admin.category.show');
            Route::post('/parent', 'ParentController')->name('admin.category.parent');
            Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
            Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
            Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
        });

        Route::group(['namespace' => 'User', 'prefix' => 'user'], function () {
            Route::get('/index', 'IndexController')->name('admin.user.index');
            Route::get('/create', 'CreateController')->name('admin.user.create');
            Route::post('/add', 'StoreController')->name('admin.user.store');
            Route::get('/{user}', 'ShowController')->name('admin.user.show');
            Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
            Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
            Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
        });
    });
});





