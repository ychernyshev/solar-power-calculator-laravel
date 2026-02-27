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
    return view('welcome');
});

Route::get('/docs', 'DocsController@docs');
Route::get('/licence', function () {
    $title = 'Solar Power Calculator: Licence';

    return view('licence', ['title' => $title]);
});
Route::get('/dashboard', 'DashboardController@dashboard');
Route::get('/add_entry', 'AddEntryController@addEntry');
Route::get('/settings', 'SettingsController@settings');
