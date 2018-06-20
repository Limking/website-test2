<?php

Route::get('/', 'PostsController@index');
Route::get('/faq', 'PostsController@faq' );
Route::get('/business', 'PostsController@business');
Route::get('/contact', 'PostsController@contact');

Route::get('/item', 'ItemsController@item');
Route::get('/demarco', 'ItemsController@demarco');
Route::get('/howard', 'ItemsController@howard');
Route::get('/inamori', 'ItemsController@inamori');
Route::get('/madman', 'ItemsController@madman');
Route::get('/moron', 'ItemsController@moron');
Route::get('/vehicle', 'ItemsController@vehicle');

Route::get('/persent', 'ItemsController@persent');
Route::get('/persent1', 'ItemsController@persent1');
Route::get('/persent2', 'ItemsController@persent2');
Route::get('/persent3', 'ItemsController@persent3');
Route::get('/persent4', 'ItemsController@persent4');

Route::get('/shovel', 'ItemsController@shovel');
Route::get('/episode1', 'ItemsController@episode1');
Route::get('/episode2', 'ItemsController@episode2');
Route::get('/episode3', 'ItemsController@episode3');
Route::get('/episode4', 'ItemsController@episode4');

Route::get('/leancanvas','LeancanvasController@leancanvas');
Route::get('/problem','LeancanvasController@problem');
Route::get('/customer','LeancanvasController@customer');
Route::get('/unique','LeancanvasController@unique');
Route::get('/solution','LeancanvasController@solution');
Route::get('/unfair','LeancanvasController@unfair');
Route::get('/revenue','LeancanvasController@revenue');
Route::get('/cost','LeancanvasController@cost');
Route::get('/key','LeancanvasController@key');
Route::get('/channels','LeancanvasController@channels');

Route::get('/basic', 'comming@basic');
Route::get('/advanced', 'comming@advanced');
Route::get('/marketing', 'comming@marketing');