<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/game/{id}', 'HomeController@game');

Route::any("/questionare/results", "HomeController@questionareResults");

Route::get('/questionare/{id}', 'HomeController@questionare');

Route::get('/profile', 'HomeController@profile');

Route::get('/leaderboards/individual', 'HomeController@leaderboardsIndividual');

Route::get('/leaderboards/department', 'HomeController@leaderboardsDepartment');

Route::post("/game/submit", "HomeController@gameSubmit");

Route::post("/questionare/submit", "HomeController@questionareSubmit");


Route::get("/test", function() {
    return view("test");
});

Route::get("/test2", function() {
    return view("test2");
});

Route::get("/test3", function() {
    return view("test3");
});
