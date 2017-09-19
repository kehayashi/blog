<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PostController@getPosts');

Route::post('/StoreLead', 'LeadController@storeLead');

Route::get('/getpostid/{id}', 'PostController@getPostId');
