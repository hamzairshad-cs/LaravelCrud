<?php

use Illuminate\Support\Facades\Route;
use App\Models\student;
use App\Http\Controllers\studentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|laravel new webphase3 commands

php artisan serve

php artisan make:model student

php artisan make:migration create_students_table


php artisan migrate

php artisan make:controller studentController
*/

Route::get('/',[App\Http\Controllers\studentController::class,'homeview']);

Route::get('/addrecords',[App\Http\Controllers\studentController::class,'addrecord']);

Route::post('/addsubmit',[App\Http\Controllers\studentController::class,'addsubmit']);

Route::get('/showrecords',[App\Http\Controllers\studentController::class,'showrecords'])->name('Show-record');


Route::get('/update/{id}',[App\Http\Controllers\studentController::class,'updaterecord']);

Route::post('/updatesubmit/{id}',[App\Http\Controllers\studentController::class,'updatesubmit']);

Route::post('/updatesubmit/{id}',[App\Http\Controllers\studentController::class,'updatesubmit']);


Route::get('/delete/{id}',[App\Http\Controllers\studentController::class,'delete']);



