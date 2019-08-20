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

Route::get('/', 'pages@index');

Route::get('/form', 'SingleController@create');
Route::post('/form', 'SingleController@store');

Route::get('/group', 'GroupController@create');


Route::post('/group', 'GroupController@store');

// Route::get('/team', 'pages@viewGroup');

Auth::routes();

Route::get('/backend', 'HomeController@index')->name('home');
Route::get('/Singles','HomeController@pullSingles')->name('pullSingles');
Route::get('/pullgroupsOfsingles','HomeController@pullGroupsOfSingles')->name('pullGroupsOfSingles');
Route::get('/SinglesGroupMaker/{track}','HomeController@showSinglesGroupMaker')->name('makeSinglesGroup');
Route::get('/makeGroup/{memberIDs}','HomeController@makeGroup')->name('makeGroup');
Route::get('/pullgroups/{status}', 'HomeController@fetch')->name('pullGroups');
Route::get('/showGroup/{id}','HomeController@show')->name('showGroup');
Route::get('/acceptgroup/{id}', 'HomeController@accept')->name('acceptGroup');
Route::get('/rejectgroup/{id}', 'HomeController@reject')->name('rejectGroup');

// Route::get('/done','pages@done');