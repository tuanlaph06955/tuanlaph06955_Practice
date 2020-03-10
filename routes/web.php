<?php

// login và logout
Route::get('login', 'frontend\AuthController@getLoginForm');
Route::post('login', 'frontend\AuthController@login')->name('auth.login');
Route::get('logout', 'frontend\AuthController@logout')->name('auth.logout');
//đăng ký
Route::get('registration', 'frontend\AuthController@getRegistrationForm');
Route::post('registration', 'frontend\AuthController@Registration')->name('auth.registration');
// home cho mọi người xem
Route::resource('home', 'frontend\HomeController');


// các chức năng của user
Route::group(['middleware' => ['check_aut',],], function () {
Route::resource('user', 'frontend\UserController');
});


// các chức năng của admin
Route::group(['middleware' => [
    'check_role_admin',
],
], function () {
Route::resource('admin','backend\UserController');//users
Route::resource('posts','backend\PostController');//posts
Route::resource('image','backend\ImageController');//posts
});
