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


Route::get('/', ['uses' => 'PageController@home', 'as' => 'page.home']);

Route::get('/portfolio/{slug}', 'PortfolioController@view')->name('portfolio.view');

Route::post('/contact', 'PageController@submitContact')->name('contact.submit');

