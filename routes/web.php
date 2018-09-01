<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// User Routes
Route::group(['namespace' => 'User'], function() {
	// указываем какую функции в контроллере использовать: Контроллер@функция
	Route::get('/','HomeController@index'); // root страница
	// {slug?} означает что slug не обязателен
	Route::get('post/{slug}', 'PostController@post')->name('post');


	Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');
	Route::get('post/category/{category}', 'HomeController@category')->name('category');
	
});

Route::view('/about', 'about')->name('about');

// Admin Routes
Route::group(['namespace' => 'Admin'], function() {
	Route::get('admin/home', 'HomeController@index')->name('admin.home');
	// Post Routes указываем адресс и путь нахождения контроллера
	Route::resource('admin/post', 'PostController');
	// User Routes
	Route::resource('admin/user', 'UserController');
	// Tag Routes
	Route::resource('admin/tag', 'TagController');
	// Category Routes
	Route::resource('admin/category', 'CategoryController');

	// Admin auth route
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@Login');
});
/*


Route::get('admin/category', function() {
	
});


Route::prefix('admin')->group(function () {
	// сгрупировал несколько роутов относящихся к админ панеле
	Route::get('home', function() {
		return view('admin.home');
	})->name('admin');

	Route::get('post', function() {
		return view('admin.post.post');
	});

	Route::get('tag', function() {
		return view('admin.tag.tag');
	});

	Route::get('category', function() {
		return view('admin.category.category');
	});
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
