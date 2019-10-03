<?php
use Illuminate\Support\Facades\URL;

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

// Route::get('/form', 'SingleController@create');
// Route::post('/form', 'SingleController@store');
// Route::get('/group', 'GroupController@create');
// Route::post('/group', 'GroupController@store');


Auth::routes();

Route::get('/backend', 'HomeController@index')->name('home');
Route::get('/Singles','HomeController@pullSingles')->name('pullSingles');
Route::get('/pullgroupsOfsingles','HomeController@pullGroupsOfSingles')->name('pullGroupsOfSingles');
Route::get('/SinglesGroupMaker','HomeController@showSinglesGroupMaker')->name('makeSinglesGroup');
Route::get('/makeGroup/{memberIDs}','HomeController@makeGroup')->name('makeGroup');
Route::get('/pullgroups/{status}', 'HomeController@fetch')->name('pullGroups');
Route::get('/showGroup/{id}','HomeController@show')->name('showGroup');
Route::patch('/RandomizeSingles','HomeController@makeRandomGroupsOfSingles')->name('makeRandomSinglesGroups');
Route::patch('/acceptgroup/{id}', 'HomeController@accept')->name('acceptGroup');
Route::patch('/rejectgroup/{id}', 'HomeController@reject')->name('rejectGroup');
Route::patch('/rejectSingle/{single}', 'HomeController@rejectSingle')->name('rejectSingle');
Route::get('/attendedGroup/{group}','HomeController@attendedGroup')->name('attendedGroup');
Route::get('/attendedSingle/{single}','HomeController@attendedSingle')->name('attendedSingle');
Route::get('/absentGroup/{group}','HomeController@absentGroup')->name('absentGroup');
Route::get('/absentSingle/{single}','HomeController@absentSingle')->name('absentSingle');
Route::get('/confirmGroup/{Group}','GroupController@confirm')->name('confirmGroup');
Route::get('/confirmSingle/{Single}','SingleController@confirm')->name('confirmSingle');

Route::get('/test',function(){
    return view('email.schedule');
});
