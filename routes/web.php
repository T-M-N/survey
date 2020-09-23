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

// Section public survey
Route::get('/', 'SurveyController@index')->name('survey');
Route::get('state', 'SurveyController@getJSONUser');

// Url question answer list
Route::resource('validation', 'AnswerUrlController');
Route::get('/reponse/{url}', 'AnswerUrlController@show')->name('url');

// Section privée admin
Route::get('administration', 'AdminController@index')->middleware('auth');
Route::get('administration/statistique', 'AdminController@index')->name('charts');
Route::get('administration/question', 'AdminController@questionTypeList')->name('question');
Route::get('administration/reponse', 'AdminController@userAnswerList')->name('answer');

// API - Chart JS
Route::get('chart/getData','AdminController@getJSONPieChartData');
Route::get('chart/getDataRadar','AdminController@getJSONRadarChartData');

Auth::routes();