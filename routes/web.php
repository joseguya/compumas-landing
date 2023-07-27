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

Route::get('/', array('as'=> 'index', 'uses'=>'LandingController@show'));

Route::post('/mail/contact/send', array('as'=> 'mail.contact.send', 'uses'=>'LandingController@sendMail'));

Route::view('/contact','mails.contact');
Route::view('/contact-notif','mails.contact-notification');

Route::get('/beneficios', function () {
    $url = route('index');
    $url = $url.'/#beneficios';
    return redirect($url);
});

Route::get('/extras', function () {
    $url = route('index');
    $url = $url.'/#extras';
    return redirect($url);
});

Route::get('/como-funciona', function () {
    $url = route('index');
    $url = $url.'/#funcionamiento';
    return redirect($url);
});

Route::get('/sumate', function () {
    $url = route('index');
    $url = $url.'/#sumate';
    return redirect($url);
});
