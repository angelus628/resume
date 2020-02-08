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

Route::prefix('{locale?}')->middleware('locale')->group(function(){
    Route::get('/', 'PagesController@home')->name('home');
    Route::get('/dashboard', 'Admin\HomeController@index');
    Auth::routes();

    Route::get('/mailable', function(){
        $message = array(
            'contactName'    => 'Luis Ángel',
            'contactEmail'   => 'lagudelo@digitalvirgoamericas.com',
            'contactSubject' => 'Me gusta tu página',
            'contactMessage' => 'Me gusta tu página de verdad',
        );
        return new App\Mail\ContactMail($message);
    })->name('mailable');
});



Route::post('/contact', 'PagesController@contact')->name('contact');
