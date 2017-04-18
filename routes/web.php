<?php

//strona glowna wizytowki
Route::get('/', 'MainController@index');
Route::get('galeria.shtml', 'MainController@gallery');
Route::get('kontakt.shtml', 'MainController@contact');

//dashboard
Route::get('/dashboard.shtml', 'DashboardController@index');
Route::get('/dashboard/oceny.shtml', 'DashboardController@oceny');
Route::get('/dashboard/nieobecnosci.shtml', 'DashboardController@nieobecnosci');
Route::get('/dashboard/wiadomosci/create.shtml','DashboardController@create');
Route::post('/dashboard/wiadomosci/store.shtml','DashboardController@store');
Route::get('/dashboard/wiadomosci/{id}.shtml','DashboardController@show');
Route::get('/dashboard/wiadomosci.shtml', 'DashboardController@wiadomosci');
Route::get('/dashboard/wydarzenia.shtml', 'DashboardController@wydarzenia');


Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

