<?php

use App\Models\City;
use App\Models\Country;
use App\Models\DocumentType;
use App\Models\Employee;
use App\Models\JobPosition;
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
Route::get('/city/delete/{id}', [App\Http\Controllers\CityController::class, 'destroy'])->name('city');
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


Route::get('/jobpositions', [App\Http\Controllers\JobPositionController::class, 'index']);
Route::get('/job-position/{id}', [App\Http\Controllers\JobPositionController::class, 'show'])->name('job-position');
Route::post('/job-position/store', [App\Http\Controllers\JobPositionController::class, 'store'])->name('job-position');
Route::post('/job-position/update/{id}', [App\Http\Controllers\JobPositionController::class, 'update']);
Route::get('/job-position/delete/{id}', [App\Http\Controllers\JobPositionController::class, 'destroy'])->name('city');
Route::get('/job-position-add', function () {
    $method = "POST";
    $route = '/job-position/store';
    $jobPositions = JobPosition::all();
    return view("jobPosition.add", compact('method','route','jobPositions') );
});
Route::get('/job-position-update/{id}', function ($id) {
    $method = "POST";
    $route = '/job-position/update/'.$id;
    $jobPositions = JobPosition::all();
    $jobPosition = JobPosition::find($id);
    return view("jobPosition.add", compact('method','route','jobPositions','jobPosition') );
});


Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'index']);
Route::get('/employee/{id}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('employee');
Route::post('/employee/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee');
Route::post('/employee/update/{id}', [App\Http\Controllers\EmployeeController::class, 'update']);
Route::get('/employee/delete/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('city');
Route::get('/employee-add', function () {
    $method = "POST";
    $route = '/employee/store';
    $countries = Country::all();
    $cities = City::all();
    $documentTypes = DocumentType::all();
    return view("employee.add", compact('method','route','countries','cities','documentTypes') );
});
Route::get('/employee-update/{id}', function ($id) {
    $method = "POST";
    $route = '/employee/update/'.$id;
    $employee = Employee::where('id_employee',$id)->with(["city","document_type"])->first();
    $countries = Country::all();    
    $cities = City::all();
    $documentTypes = DocumentType::all();
    return view("employee.add", compact('method','route','employee','countries','cities','documentTypes') );
});