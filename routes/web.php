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
Route::get('/test1', function(){
		return view('test1');
	});

Route::get('/new/bills', function() {
		return view('new.bills');
	});

Route::post('/new/crush', [
	'uses' => 'CrusherController@crush',
	'as' => 'new.crush'
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/new', [

	'uses' => 'PagesController@new'

]);

Route::get('/todos', [

	'uses' => 'TodosController@index',
	'as' => 'todos'

]);

Route::get('/todo/delete/{id}', [
		'uses' => 'TodosController@delete',
		'as' => 'todo.delete'
	]);

Route::get('/todo/update/{id}', [
		'uses' => 'TodosController@update',
		'as' => 'todo.update'
	]);

Route::post('/todo/save/{id}', [
		'uses' => 'TodosController@save',

		'as' => 'todos.save'
	]);

Route::post('/create/todo', [
	'uses' => 'TodosController@store'
	]);

Route::get('/todos/completed/{id}', [
		'uses' => 'TodosController@completed',
		'as' => 'todos.completed'
	]);

Route::get('/app', function () {
    return view('app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
