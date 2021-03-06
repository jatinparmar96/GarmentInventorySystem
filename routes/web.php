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
Route::get('print','TestController@Test')->name('print');
Route::get('ProductEntry','ProductEntryController@getProductEntry')->name('entry');
Route::get('Dashboard','DashboardController@getDashboard')->name('dashboard');
Route::get('Billing','BillingController@getBilling')->name('billing');
Route::get('History','HistoryController@getHistory')->name('history');
