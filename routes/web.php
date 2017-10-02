<?php

Route::get('/', 'ravintolatController@printRestaurants');

Route::get('id={id}', 'ravintolatController@searchById');

Route::get('/all', 'ravintolatController@showAll');





