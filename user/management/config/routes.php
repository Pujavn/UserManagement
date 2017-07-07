<?php

/* 
 * Routes of package
 */

Route::get('user/', 
  'user\management\controllers\UserController@index');

Route::get('user/new',
    'user\management\controllers\UserController@newAction');

Route::post('user/create',
    'user\management\controllers\UserController@createAction');
