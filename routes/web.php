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
Route::get('/validation/{url}', 'AnswerController@show')->name('url');

// //back
// Route::resource('admin', 'DashController');

Route::get('administration', 'ChartController@index')->name('charts');
// Route::get('administration', 'HomeController@index')->name('statistic');
Route::get('administration/question', 'QuestionController@index')->name('question');
Route::get('administration/answer', 'AnswerSurveyController@index')->name('answer');

// API - Chart JS
Route::get('chart/getData','ChartController@getJSONChartData');

Auth::routes();