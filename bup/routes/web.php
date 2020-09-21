<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

//add item to menu list
Route::get('admin/add/item', 'HomeController@add_food_items')->name('add_food_items');
Route::get('admin/add/item/breakfast', 'HomeController@add_breakfast_items')->name('add/item/breakfast');
Route::get('admin/add/item/lunch', 'HomeController@add_lunch_items')->name('add/item/lunch');
Route::get('admin/add/item/dinner', 'HomeController@add_dinner_items')->name('add/item/dinner');

//add menu of 3 times
Route::get('admin/add/menu', 'HomeController@add_menu')->name('add_menu');
Route::get('admin/insert/menu', 'HomeController@insert_menu')->name('insert/menu');

//show menu
Route::get('admin/show/menu', 'HomeController@show_menu')->name('show_menu');
Route::get('edit/menu/{id}','HomeController@edit_menu');
Route::post('update/breakfast_menu/{id}','HomeController@update_breakfast_menu');
Route::post('update/lunch_menu/{id}','HomeController@update_lunch_menu');
Route::post('update/dinner_menu/{id}','HomeController@update_dinner_menu');

Route::get('admin/show/users','HomeController@show_users')->name('show_users');
Route::get('edit/users/{id}','HomeController@edit_users');
Route::post('update/users','HomeController@update_users')->name('update_user');



Route::get('check', 'HomeController@check')->name('check');
Route::post('search/breakfast', 'HomeController@search_breakfast')->name('search_breakfast');
Route::post('search/lunch', 'HomeController@search_lunch')->name('search_lunch');
Route::post('search/dinner', 'HomeController@search_dinner')->name('search_dinner');

//order

Route::get('changeBreakfastStatus', 'HomeController@changeBreakfastStatus');
Route::get('changeLunchStatus', 'HomeController@changeLunchStatus');
Route::get('changeDinnerStatus', 'HomeController@changeDinnerStatus');

Route::get('changeBreakfastStatusTomorrow', 'HomeController@changeBreakfastStatusTomorrow');
Route::get('changeLunchStatusTomorrow', 'HomeController@changeLunchStatusTomorrow');
Route::get('changeDinnerStatusTomorrow', 'HomeController@changeDinnerStatusTomorrow');

Route::get('view/order', 'HomeController@show_orders')->name('show_orders');

//costs
Route::get('add/cost', 'HomeController@add_cost')->name('add_cost');
Route::post('save/cost/{id}','HomeController@save_cost');

//bill
Route::get('show/bill', 'HomeController@show_bill')->name('show_bill');
Route::get('/export_excel/excel', 'HomeController@export')->name('export_excel.excel');
Route::get('/export_excel_LastMonth/excel', 'HomeController@export_LastMonth')->name('export_excel_LastMonth.excel');

