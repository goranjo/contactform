<?php




Route::post('contact', ['as'=>'contact_store', 'uses'=>'ContactController@store']);

Route::get('/', ['as'=>'contact', 'uses'=>'ContactController@contact']);