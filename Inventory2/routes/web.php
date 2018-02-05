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
//shows the home page
//  Route::get('/','ProductsController@index');

//shows the home page
Route::get('/','ProductsController@welcome');
//shows the products list
Route::get('/products','ProductsController@show');
// pulls the add new form

//Route::get('/Addnew','ProductsController@Addnew')->middleware('auth');

//Does the actual adding does not necessarily need a for route->controller-> done
Route::post('/Addnew','ProductsController@store')->name('store');

//pulls the adjust product form
//Route::get('/Adjustproduct/{product}','ProductsController@Adjustproduct')->middleware('auth');

//Does the actual updating does not necessarily need a for route->controller-> done
Route::post('/Adjustproduct/{id}','ProductsController@update')->name('update');

//deletes unwanted product from data base;
Route::get('/products/{id}','ProductsController@destroy')->name('destroy');

//perform authentication
Auth::routes();
Route::get('/menu', 'HomeController@index')->name('index');


