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

Route::get('/', 'SiteController@home');
Route::get('/home', 'SiteController@home');

/*
|
|-------------------------------------------------------------------------
| Support Routes
|-------------------------------------------------------------------------
|
*/
Route::get('/support',function(){
    return view('support');
})->name('support');

Route::post('/support', 'SupportController@store');


Route::get('/404', function(){
    return view('404');
});

/*
|
|	Other sites URI
|
*/

Route::get('/autolocker', function(){
	return view('autolocker');
});
Auth::routes();

Route::get('/dashboard', 'SiteController@dashboard')->name('dashboard');
