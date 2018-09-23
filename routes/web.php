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

Route::get('motuget/{id}', function($id)
{
    return 'motuget '.$id;
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('motuget', function()
{
    return 'motuget';
});

Route::post('motuget', function()
{
    return 'post API';
});
