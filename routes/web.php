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
<<<<<<< HEAD
   //return view('welcome');
	//return"Hello laravel";
	return "Hello Project";

=======
    //return view('welcome');
    return 'Hello Laravel';
>>>>>>> 49b4e9f6e1fd6459be6d9fe22fe4419541d052bd
});


Route::resource('students','StudentController');

Route::resource('brands','BrandController');
