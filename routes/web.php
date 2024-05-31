<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use \Illuminate\Support\Facades\Session;

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

define('CTRL','App\\Http\\Controllers\\');

//Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::post('/auth', 'App\Http\Controllers\API\AuthController')->name('auth');


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::group(['prefix' => 'admin'] , function () {

        Route::group(['namespace' => 'Product', 'prefix' => 'product'], function ()
{
    Route::post('/index', 'IndexController')->name('product.index');
    Route::post('/main', 'MainController')->name('product.main');
    Route::post('/create', 'CreateController')->name('product.create');
    Route::post('/add', 'StoreController')->name('product.store');
    Route::post('/id', 'ShowController')->name('product.show');
    Route::post('/update', 'UpdateController')->name('product.update');
    Route::post('/delete', 'DeleteController')->name('product.delete');
});

        Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
            Route::post('/index', 'IndexController')->name('category.index');
            Route::post('/create', 'CreateController')->name('category.create');
            Route::post('/add', 'StoreController')->name('category.store');
            Route::post('/id', 'ShowController')->name('category.show');
            Route::post('/parent', 'ParentController')->name('category.parent');
            Route::post('/update', 'UpdateController')->name('category.update');
            Route::post('/delete', 'DeleteController')->name('category.delete');
        });

        Route::group(['namespace' => 'User', 'prefix' => 'user'], function () {
            Route::post('/index', 'IndexController')->name('user.index');
            Route::post('/create', 'CreateController')->name('user.create');
            Route::post('/add', 'StoreController')->name('user.store');
            Route::post('/id', 'ShowController')->name('user.show');
            Route::post('/edit', 'EditController')->name('user.edit');
            Route::post('/update', 'UpdateController')->name('user.update');
            Route::post('/delete', 'DeleteController')->name('user.delete');
        });
    });

//    Route::group(['namespace' => 'User', 'prefix' => 'user'], function () {
//        Route::get('/create', 'CreateController')->name('user.create');
//        Route::post('/', 'StoreController')->name('user.store');
//    });
});

//use Illuminate\Support\Facades\URL;
//$url = URL::current();
//$url = explode("/",$url);
////Array ( [0] => http: [1] => [2] => 127.0.0.1:8000 [3] => product [4] => add )
//$MODULE = "";
//$OPERATION = "";
//$ID = "";
//$way = "";
//$action = "";
//if(isset($url[3]) AND $url[3] != "")
//{
//    $MODULE = $url[3];
//    $way = "/".$url[3];
//    $action = CTRL.ucfirst($MODULE)."Controller";
//}
//if(isset($url[4]) AND $url[4] != "")
//{
//    $OPERATION = ucfirst($url[4]);
//    $way .= "/".$url[4];
//    $action .= "@".$url[4];
//}
//else
//{
//    $action .= "@list";
//}
//if(isset($url[5]) AND $url[5] != "")
//{
//    $ID = $url[5];
//    $way .= "/{variable}";
//}
//
//Route::post($way,$action);



//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
