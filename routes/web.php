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

Route::get('/', function() {
	return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('hello', function() {
	return view('hello');
});


// OLD CODE where the view was changed by the route itself
// Route::get('about', function () {
// 	return view('pages/about');
// });

// NEW CODE where the view is changed in the controller
// reference in the route
// This means that when the about url is accessed,
// call the PageController's about function
Route::get('about', 'App\Http\Controllers\PageController@about');