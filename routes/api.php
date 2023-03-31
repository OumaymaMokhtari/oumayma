<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articles', 'ApiController@indexArticles');
Route::get('/articles/{article}', 'ApiController@showArticle');
Route::post('/articles', 'ApiController@storeArticle');
Route::put('/articles/{article}', 'ApiController@updateArticle');
Route::delete('/articles/{article}', 'ApiController@destroyArticle');

Route::get('/events', 'ApiController@indexEvents');
Route::get('/events/{event}', 'ApiController@showEvent');
Route::post('/events', 'ApiController@storeEvent');
Route::put('/events/{event}', 'ApiController@updateEvent');
Route::delete('/events/{event}', 'ApiController@destroyEvent');

Route::get('/annonces', 'AnnonceController@index');
Route::post('/annonces', 'AnnonceController@store');
Route::get('/annonces/{annonce}', 'AnnonceController@show');
Route::put('/annonces/{annonce}', 'AnnonceController@update');
Route::delete('/annonces/{annonce}', 'AnnonceController@destroy');
