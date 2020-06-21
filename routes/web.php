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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contactos','ContactController@index')->name('contact.index');
Route::get('/contactos/crear','ContactController@create')->name('contact.create');
Route::post('/contactos/save','ContactController@save')->name('contact.save');
Route::get('/contactos/edit/{id}','ContactController@edit')->name('contact.edit');
Route::post('/contactos/update/','ContactController@update')->name('contact.update');
