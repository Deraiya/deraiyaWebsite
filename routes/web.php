<?php



Route::get('/','ContactController@index')->name('index');
Route::get('/about','ContactController@about')->name('about');
Route::get('/contact','ContactController@contact')->name('contact');
Route::post('/contact_saved','ContactController@contact_post')->name('contact_post');

//Route::get('/admin','ContactController@admin_login')->name('admin');
//Route::post('/admin_login','UserController@login_post')->name('login_post');
//Route::get('/admin_page','UserController@admin_page')->name('admin_page');
//Route::get('/admin_reg','UserController@admin_reg')->name('admin_reg');
//Route::post('/admin_reg','UserController@reg_post')->name('reg_post');

Auth::routes();

Route::get('/home', 'HomeController@index');
