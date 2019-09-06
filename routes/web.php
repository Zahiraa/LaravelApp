<?php




Route::get('/','FirstController@index');

Route::any('/new_page','FirstController@storePage');

Route::get('/user/{user}','FirstController@showUser');

Route::get('/pages', 'FirstController@allPages');

//Route::get('/page/new', 'FirstController@newPage');

Route::get('/page/{page}','FirstController@showPage');

Route::get('/comments','FirstController@allComments');

Route::any('/new/comment/{id}','FirstController@newComment');


Route::get('/page_edit/{id}','PageController@edit');
Route::put('/page_update/{id}','PageController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/comment_edit/{id}','CommentController@edit');
Route::put('/comment_update/{id}','CommentController@update');

Route::any('/comment/{id}','CommentController@delete');
