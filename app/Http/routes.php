<?php

Route::get('ayuda', 'PaginasControler@ayuda');
Route::get('acerca', 'PaginasControler@acerca');

Route::get('articulos', 'ArticulosController@index');
Route::get('articulos/crear', 'ArticulosController@create');
Route::post('articulos', 'ArticulosController@store');

Route::get('articulos/{id}', 'ArticulosController@show');

