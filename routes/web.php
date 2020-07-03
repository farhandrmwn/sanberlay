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
    return view('index');
});

Route::get("/data-tables", function (){
	return view('data');
});

Route::get("/pertanyaan","PertanyaanController@index");
Route::get("/pertanyaan/create","PertanyaanController@create");
Route::post("/pertanyaan","PertanyaanController@index@store");
Route::get("/pertanyaan{idpertanyaan}","JawabanController@index");
Route::post("/pertanyaan{idpertanyaan}","JawabanController@store");
Route::resource('pertanyaan','pertanyaanController');
Route::resource('jawaban','jawabanController');