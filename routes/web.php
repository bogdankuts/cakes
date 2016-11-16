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
Route::get('/',             ['as' => 'index',       'uses' => 'StaticController@index']);
Route::get('/about',        ['as' => 'about',       'uses' => 'StaticController@about']);
Route::get('/products',     ['as' => 'products',    'uses' => 'StaticController@products']);
Route::get('/product',      ['as' => 'product',     'uses' => 'StaticController@product']);
Route::get('/services',     ['as' => 'services',    'uses' => 'StaticController@services']);
Route::get('/blog',         ['as' => 'blog',        'uses' => 'StaticController@blog']);
Route::get('/blog-post',    ['as' => 'blog_post',   'uses' => 'StaticController@blogPost']);
Route::get('/contacts',     ['as' => 'contacts',    'uses' => 'StaticController@contacts']);
