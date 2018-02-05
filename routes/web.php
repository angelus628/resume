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

#Route::any('/{locale?}', 'PagesController@home')->where('locale', '[a-z]{2}');
Route::prefix('{locale?}')->middleware('locale')->group(function(){
    Route::get('/', 'PagesController@home')->name('home');
    Route::get('/dashboard', 'Admin\HomeController@index');
    Auth::routes();
});




#Route::get('/home', 'HomeController@index')->name('home');
