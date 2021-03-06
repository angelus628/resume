<?php

use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Author\AuthorCreate;
use App\Http\Controllers\Author\AuthorIndex;
use App\Http\Controllers\Front\Home;
use App\Http\Controllers\Front\Contact;
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

Route::prefix('/admin')->middleware('auth')->group(function (): void {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::match(['get','head'], '/authors', AuthorIndex::class);
    Route::match(['get','head'], '/authors/create', AuthorCreate::class);
    /*Route::post('/authors', AuthorStore::class);
    Route::match(['put','patch'], '/authors/{author}', AuthorUpdate::class);
    Route::delete('/authors/{author}', AuthorDelete::class);
    Route::match(['get','head'], '/authors/{author}', AuthorShow::class);
    Route::match(['get','head'], '/authors/{author}/edit', AuthorEdit::class);*/
});

Route::prefix('{locale?}')->middleware('locale')->group(function(){
    Route::get('/', Home::class)->name('home');

    Route::get('/mailable', function(){
        $message = array(
            'contactName'    => 'Luis Ángel',
            'contactEmail'   => 'lagudelo@digitalvirgoamericas.com',
            'contactSubject' => 'Me gusta tu página',
            'contactMessage' => 'Me gusta tu página de verdad',
        );
        return (new App\Mail\ContactMail($message))->build();
    })->name('mailable');
});

Route::post('/contact', Contact::class)->name('contact');
