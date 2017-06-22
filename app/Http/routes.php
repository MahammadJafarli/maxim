<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', 'MaximController@index');

Route::post('/send_email','MaximController@sendEmailReminder');

Route::get('singleBlog/{id}', "MaximController@single");


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin',"AdminController@admin");

    Route::get('/about',"AboutController@index");

    Route::get('/team',"TeamController@index");

    Route::get('/positions',"PositionsController@index");

    Route::get('/service',"ServicesController@index");

    Route::get('/portfolios',"PortfoliosController@index");

    Route::get('/blogs',"BlogsController@index");

    Route::get('/aboutCreate',"AboutController@create");

    Route::post('/about-create',"AboutController@store");

    Route::get('/about/{about}/aboutEdit',"AboutController@edit");

    Route::patch('/about/{about}',"AboutController@update");

    Route::get('/serviceCreate',"ServicesController@create");

    Route::post('/create',"ServicesController@store");

    Route::get('/service/{service}/serviceEdit',"ServicesController@edit");

    Route::patch('/service/{service}',"ServicesController@update");

    Route::delete('/service/{service}/delete', "ServicesController@destroy");

    Route::get('/positionCreate',"PositionsController@create");

    Route::post('/create',"PositionsController@store");

    Route::delete('/position/{position}/delete', "PositionsController@destroy");

    Route::get('/memberCreate', "TeamController@create");

    Route::post('/create',"TeamController@store");

    Route::delete('/team/{team}/delete', "TeamController@destroy");

    Route::get('/team/{team}/memberEdit',"TeamController@edit");

    Route::patch('/team/{team}',"TeamController@update");

    Route::get('/works',"WorksController@index");

    Route::get('/workCreate',"WorksController@create");

    Route::post('/work-create',"WorksController@store");

    Route::delete('/work/{work}/delete', "WorksController@destroy");

    Route::get('/portfolioCreate',"PortfoliosController@create");

    Route::post('/create',"PortfoliosController@store");

    Route::get('/portfolio/{portfolio}/portfolioEdit',"PortfoliosController@edit");

    Route::patch('/portfolio/{portfolio}',"PortfoliosController@update");

    Route::delete('/portfolio/{portfolio}/delete', "PortfoliosController@destroy");

    Route::get('/blogCreate',"BlogsController@create");

    Route::post('/blog-create',"BlogsController@store");

    Route::get('/blog/{blog}/blogEdit',"blogsController@edit");

    Route::patch('/blog/{blog}',"BlogsController@update");

    Route::delete('/blog/{blog}/delete', "BlogsController@destroy");

    Route::get('/categories',"CategoriesController@index");

    Route::get('/categoryCreate',"CategoriesController@create");

    Route::post('category-create',"CategoriesController@store");

    Route::delete('/category/{category}/delete', "CategoriesController@destroy");
});