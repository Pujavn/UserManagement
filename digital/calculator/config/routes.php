<?php

Route::get('add/{a}/{b}', 'Digital\Calculator\Controllers\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Digital\Calculator\Controllers\CalculatorController@subtract');
