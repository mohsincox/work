<?php

Route::resource('birth','BirthController');
Route::any('birth/delete/{id?}','BirthController@delete');

