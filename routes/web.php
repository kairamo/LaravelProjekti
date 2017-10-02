<?php

Route::get('/', 'ravintolatController@printRestaurants');

Route::get('id={id}', 'ravintolatController@searchById');

Route::get('/all', 'ravintolatController@showAll');

Route::get('ravintola={ravintola}', 'ravintolatController@searchByName');

Route::get('kaupunki={paikka}', 'ravintolatController@searchByLocation');





