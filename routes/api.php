<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\API\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->middleware('api')->controller(AuthController::class)->group(function ()
{
    Route::post('login', 'login');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::post('me', 'me');
});

Route::group(['namespace' => 'App\Http\Controllers\Users'], function () {

    Route::group(['namespace' => 'Product', 'prefix' => 'product'], function () {

        Route::post('/index', 'IndexController')->name('product.index');
        Route::post('/main', 'MainController')->name('product.main');
        Route::post('/create', 'CreateController')->name('product.create');
        Route::post('/add', 'StoreController')->name('product.store');
        Route::post('/id', 'ShowController')->name('product.show');
        Route::post('/update', 'UpdateController')->name('product.update');
        Route::post('/delete', 'DeleteController')->name('product.delete');
    });

    Route::group(['namespace' => 'User', 'prefix' => 'user'], function () {
        Route::post('/create', 'CreateController')->name('user.create');
        Route::post('/add', 'StoreController')->name('user.store');
        Route::post('/id', 'ShowController')->name('user.show');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
        Route::get('/index', 'IndexController')->name('category.index');
        Route::post('/id', 'ShowController')->name('category.show');
        Route::post('/parent', 'ParentController')->name('category.parent');
    });

});
