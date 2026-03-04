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
    $title = 'Welcome';

    return view('welcome', ['title' => $title]);
});

Route::get('/docs', 'DocsController@docs');
Route::get('/licences', 'LicenceController@licence');
Route::get('/dashboard', 'DashboardController@dashboard');
Route::get('/add_entry', 'AddEntryController@addEntry');
Route::get('/settings', 'SettingsController@settings');
