<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    Route::get('contact',
        ['as' => 'contact', 'uses' => 'AboutController@create']);
    Route::post('contact',
        ['as' => 'contact_store', 'uses' => 'AboutController@store']);
    Route::get('/test', 'HomeController@test');
    Route::get('/', 'GalleryController@index');
    Route::resource('gallery', 'GalleryController');
    Route::resource('photo', 'PhotoController');
    Route::resource('lists', 'ListsController');
    Route::get('/gallery/show/{id}', 'GalleryController@show');
    Route::get('/photo/create/{id}', 'PhotoController@create');
    Route::get('/photo/details/{id}', 'PhotoController@show');
    Route::get('/photo/edit/{id}', 'PhotoController@edit');
    Route::get('/photo/delete/{id}', 'PhotoController@destroy');
    Route::get('/home', 'HomeController@index');
    Route::get('/photo', function (\App\Photos $photos) {

        $photoss = $photos::where('id', '>=', 1)->orderBy('id', 'desc')->paginate(12);
        return view('photo.index')->withPhotoss($photoss);
    });
    Route::get('/tasks', 'TasksController@index');

});
Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'admin'], function () {
    Route::resource('user', 'UserController');
});


