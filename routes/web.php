<?php

Route::get('/', function () {
    return redirect('/about');
});

Route::get('/about', function() {
	return ' Hi to this page';
});

Route::get('/blog', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::get('/post/store', 'PostController@store');

Route::get('/post/{id}', [ 'as' => 'post.detail', function($id){
	echo "Post $id";
	echo "</br>";
	echo "Body post in ID $id";
}]);