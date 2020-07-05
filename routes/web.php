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
    return view('/datatable/index');
});

Route::get('/data-tables', function () {
    return view('/datatable/datatable');
});

// Master Template
Route::get('/master', function () {
    return view('master');
});

// Items
Route::get('/items','ItemContoller@index');

Route::get('/items/create', 'ItemContoller@create');
Route::post('/items','ItemContoller@store');
Route::get('/items/{id}/edit', 'ItemContoller@edit');
Route::put('/items/{id}', 'ItemContoller@update');
Route::delete('/items/{id}', 'ItemContoller@destroy');

Route::get('/pertanyaan','QuestionController@index');
Route::get('/pertanyaan/create', 'QuestionController@create');
Route::post('/pertanyaan','QuestionController@store');
Route::get('/pertanyaan/{id}/edit', 'QuestionController@edit');
Route::put('/pertanyaan/{id}', 'QuestionController@update');
Route::delete('/pertanyaan/{id}', 'QuestionController@destroy');

Route::get('/jawaban/{pertanyaan_id}','AnswerController@index');
Route::get('/jawaban/create/{pertanyaan_id}','AnswerController@create');
Route::post('/jawaban','AnswerController@store');
Route::delete('/jawaban/{id}', 'AnswerController@destroy');
