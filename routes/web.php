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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/quizzes', 'QuizController@index' )->name('quizzes.index');;
Route::get('/quizzes/view/{id}', 'QuizController@view' )->name('quizzes.view');
Route::post('/quizzes/view/{id}', 'QuizController@answer' )->name('quizzes.answer');;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
