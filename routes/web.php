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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/soso', [App\Http\Controllers\CategoryController::class, 'create']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/location/create', [App\Http\Controllers\LocationController::class, 'create']);
Route::get('/location/get', [App\Http\Controllers\LocationController::class, 'fetch']);
Route::post('/location/create', [App\Http\Controllers\LocationController::class, 'store']);
Route::get('/saleh', function (){
    return view('post.post');
});
Route::get('/test', function () {
    return view('craftsman.profile');
});
Route::resource('category', 'App\Http\Controllers\CategoryController');
Route::resource('crafts', 'App\Http\Controllers\CraftController');
Route::resource('as-admin', 'App\Http\Controllers\Admin\AdminController');

//Route::get('/profile', 'App\Http\Controllers\ProfileController@inex');
Route::get('/location/{user}', 'App\Http\Controllers\LocationController@create');
Route::post('/location/{user}', 'App\Http\Controllers\LocationController@store');

Route::get('/userLocation', 'App\Http\Controllers\LocationController@loc');
Route::get('/current-locations/{user}', 'App\Http\Controllers\LocationController@cuttentLocaation');
Route::delete('/location/{location}/delete', 'App\Http\Controllers\LocationController@destroy')->name('location.destroy');
Route::get('craftsman/{craftsman}/edit', 'App\Http\Controllers\CraftsmanController@edit')->name('craftsman.eded')->middleware('auth:craftsman');
Route::patch('craftsman/{craftsman}/update',  ['as' => 'craftsman.update', 'uses' => 'App\Http\Controllers\CraftsmanController@update'])->middleware('auth:craftsman');;
