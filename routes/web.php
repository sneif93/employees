<?php

use App\Models\City;
use App\Models\Country;
use Illuminate\Support\Facades\View;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\CityController::class, 'index'])->name('city');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cities', [App\Http\Controllers\CityController::class, 'index'])->name('city');
Route::get('/city/{id}', [App\Http\Controllers\CityController::class, 'show'])->name('city');
Route::post('/city/store', [App\Http\Controllers\CityController::class, 'store']);
Route::post('/city/update/{id}', [App\Http\Controllers\CityController::class, 'update']);
Route::get('/city-add', function () {
    $method = "POST";
    $route = '../city/store';
    $countries = Country::all();
    return view("city.add", compact('method','route','countries') );
});
Route::get('/city-update/{id}', function ($id) {
    $method = "POST";
    $route = '../city/update/'.$id;
    $countries = Country::all();
    $city = City::find($id);
    return view("city.add", compact('method','route','countries','city') );
});
Route::get('/city/delete/{id}', [App\Http\Controllers\CityController::class, 'destroy'])->name('city');
Route::get('/jobpositions', [App\Http\Controllers\JobPositionController::class, 'index']);