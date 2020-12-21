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

/* Route::get('/', function () {
    return view('welcome');
}); */

//frontend home page
Route::get('/', 'Frontend\Frontendcontroller@index');
//frontend home page

//frontend single page
Route::get('services', 'Frontend\Frontendcontroller@services')->name('service');
Route::get('contact-us', 'Frontend\Frontendcontroller@contactUs')->name('contact.us');
//frontend single page

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//manage CRUD operation area
Route::prefix('crud')->group(function () {
    Route::get('/view', 'Backend\crudController@view')->name('crud.view');
    Route::get('/add', 'Backend\crudController@add')->name('crud.add');
    Route::post('/store', 'Backend\crudController@store')->name('crud.store');
    Route::get('/edit/{id}', 'Backend\crudController@edit')->name('crud.edit');
    Route::post('update/{id}', 'Backend\crudController@update')->name('crud.update');
    Route::post('delete', 'Backend\crudController@delete')->name('crud.delete');
    Route::get('/details/{id}', 'Backend\crudController@details')->name('crud.details');
});
//manage student fee category routes end