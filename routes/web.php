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

Route::get('/', 'ReceipeController@index');
// Route::get('/php', 'HomeController@phpPage');
// Route::get('/js', 'HomeController@jsPage');
// Route::get('/', function () {
//     return view('home', [
//     	"name" => "Home Page"
//     ]);
// });

// Route::get('/php', function() {
// 	return view('php', [
// 		"data" => array(
// 			"lesson1" => "This is PHP Lesson1",
// 			"lesson2" => "This is PHP Lesson2",
// 			"lesson3" => "This is PHP Lesson3",
// 		)
// 	]);
// });


// Route::get('/js', function() {
// 	return view('js', [
// 		"data" => array(
// 			"lesson1" => "This is js Lesson1",
// 			"lesson2" => "This is js Lesson2",
// 			"lesson3" => "This is js Lesson3",
// 		)
// 	]);
// });
