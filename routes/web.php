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
Route::post('/storeCar','CarsController@storeCar');
Route::get('/getCars', 'CarsController@getCars');
Route::post('/deleteCar/{id}', 'CarsController@deleteCar');
Route::post('/editCars/{id}', 'CarsController@editCar');