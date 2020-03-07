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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/board/list', 'BoardController@index')->name('list');

Route::get('/board/createForm', 'BoardController@create');

Route::get('/board/create_form', function () {
    return view('board.create_form');
});

Route::get('/index', function () {
    return view('index');
});



Route::get('/Auth/register', function () {
    return view('Auth.register');
});

// Route::resource('/Board/list', 'boardController@index');

Route::get('board/view/{id}', 'BoardController@show');

Route::get('board/edit_form/{id}', 'BoardController@edit');

// /update는 form에 전달하기 위한 이름. 경로는 update->view
Route::post('update/{id}', 'BoardController@update');

Route::get('board/delete/{id}', 'BoardController@destroy');

// /store이 찐 경로
Route::post('/store', 'BoardController@store');

// Route::resource('list', 'boardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/task_store', 'BoardController@task_store');

Route::get('/about','IndexController@about')->name('about');

// Route::get('/schedule/Calender', 'IndexController@task_index');

// Route::get('schedule/main', 'TaskController@task_index');

Route::get('schedule/main', 'TaskController@index')->name('task');

Route::post('schedule/view', function () {
    return view('schedule.view');
});

Route::post('schedule/edit_form/{id}', function () {
    return view('schedule.edit_form');
});

// Route::get('schedule/edit_form/{id}', 'TaskController@edit');

// Route::delete('tasks/{id}', 'TaskController@destroy');

Route::resource('tasks', 'TaskController');
