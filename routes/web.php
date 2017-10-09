<?php

Route::get('/', 'ravintolatController@index');   // ravintolatController@printRestaurants

Route::get('id={id}', 'ravintolatController@searchById');

Route::get('/all', 'ravintolatController@showAll');

Route::get('ravintola={ravintola}', 'ravintolatController@searchByName');

Route::get('kaupunki={paikka}', 'ravintolatController@searchByLocation');

Route::post('/posts', 'ravintolatController@addToTable');

Route::post('/find', 'ravintolatController@findFromTable');

Route::get('/show', 'ravintolatController@showByCity');

Route::get('/haku', 'ravintolatController@printRestaurants');





