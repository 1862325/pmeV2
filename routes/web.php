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

Route::get('/installer', "AppController@installer");
Route::get('/', "BistroController@index");
Route::get('/voirmenu', "BistroController@show");
Route::get('/menu', "ProduitController@index");
Route::get('/menu/{produit}', "ProduitController@show")->where(["produit", '[0-9]+']);

Route::get('/login', "ProduitController@login");
Route::get('/admin', "ProduitController@accueil");
Route::get('/admin/create', "ProduitController@create");
Route::post('/admin/create', "ProduitController@store");
Route::get('/admin/liste', "ProduitController@liste");
Route::get('/admin/liste/{produit}', "ProduitController@edit")->where(["produit", '[0-9]+']);
Route::post('/admin/liste/{produit}', "ProduitController@update")->where(["produit", '[0-9]+']);