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

Route::get('/pertanyaan','QuestionController@index');
Route::get('/pertanyaan/create', 'QuestionController@create');
Route::post('/pertanyaan','QuestionController@store');

Route::get('/jawaban/{pertanyaan_id}','AnswerController@index');
