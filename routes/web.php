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

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/locale/{locale}', function ($locale){

    App::setLocale($locale);
    Session::put('locale',$locale);
    return redirect()->back();

})->name('locale');

Route::get('/', 'Pages\\HomeController@index')->name('home');
Route::get('/about-us', 'Pages\\AboutController@index')->name('about-us');
Route::get('/products', 'Pages\\ProductController@index')->name('products');
Route::get('/contact', 'Pages\\ContactController@index')->name('contact');

Route::post('/call-back', 'FormController@callBack')->name('call-back');
Route::post('/contact-form', 'FormController@contactForm')->name('contact-form');


Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();

    //Message route

    Route::get('/message', 'Admin\\MessageController@index')->name('message.index');
    Route::get('/message/view/{id}', 'Admin\\MessageController@view')->name('message.view');
    Route::delete('/message/delete/{id}', 'Admin\\MessageController@destroy')->name('message.delete');
});
