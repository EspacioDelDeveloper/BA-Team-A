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
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/projects', 'ProjectsController@projects')->name('projects');
Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/contact-us', 'ContactController@contactUs')->name('contactUs');

Route::get('/usuarioRegistrado', 'Auth\RegisterController@usuarioRegistrado')->name('usuarioRegistrado');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
