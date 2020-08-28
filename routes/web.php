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

Route::get('/', 'FrontController@index')->name('home');

//validation survey
Route::resource('validation', 'AnswerController');

//back
Route::resource('administration', 'SurveyController');

// Route::get('/admin/question', 'SurveyController')->name('admin.question');
// Route::get('/admin/answer', 'SurveyController')->name('admin.answer');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
