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
//For image
Route::get('resizeImage', 'ImageController@resizeImage');
Route::post('resizeImagePost', 'ImageController@resizeImagePost')->name('resizeImagePost');

//Route::view('/', 'layout');
Route::view('/about', 'about');

Route::get('/companies', 'CompanyController@index');

Route::get('/customers', 'CustomersController@index');
Route::get('/customers/create', 'CustomersController@create');
Route::post('/customers/create', 'CustomersController@store');
Route::get('/customers/{customer}/{slug}', 'CustomersController@show');
Route::get('/customers/{customer}/edit', 'CustomersController@edit');
Route::put('/customers/{customer}', 'CustomersController@update');
Route::delete('/customers/{customer}', 'CustomersController@destroy');

Route::get('/user', 'UserController@index');
Route::get('/user/{user}', 'UserController@show');

Route::get('/tags', function () {
    $tags = \App\Tag::all();
    return view('tag.index', compact('tags'));
});

Route::get('/post', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post/create', 'PostController@store');
Route::delete('/post/{id}', 'PostController@destroy');

Route::get('/contact-us', 'ContactFormController@create')->name('contact.create');
Route::post('/contact-us', 'ContactFormController@store')->name('contact.store');

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/contact', function () {
//    return view('contact');
//});
//
//Route::get('/about', function () {
//    return view('about');
//});

Auth::routes();

Route::get('/', 'HomeController@index');
