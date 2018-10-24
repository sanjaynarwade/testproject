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
    return view('auth.login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('add_contact',"ContactController@Addcontact");
Route::get('all_contact',"ContactController@Allcontact");
Route::post('insert_contact',"ContactController@insert");
Route::get('delete_comtact/{id}',"ContactController@deletecontact");
Route::get('show_contact/{id}',"ContactController@showcontact");
Route::get('edit_contact/{id}',"ContactController@editcontact");
Route::post('update_contact/{id}',"ContactController@updatecontact");

Route::get('all_data',"StudentController@alldata");
Route::get('threetablejoin',"StudentController@threedata");








