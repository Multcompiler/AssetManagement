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
    return view('index');
});

//Manage Base Fields and Description Fields
Route::get('/manage/base/add', [
     "uses" => "ManageController@add_base_details",
     "as" => "add_base_details"
]);
Route::get('/manage/field/add', [
    "uses" => "ManageController@add_fields_description",
    "as" => "add_fields_description"
]);
Route::get('/manage/base/view', [
    "uses" => "ManageController@view_base_details",
    "as" => "view_base_details"
]);
Route::get('/manage/field/view', [
    "uses" => "ManageController@view_field_details",
    "as" => "view_field_details"
]);
Route::get('/get/category/list', [
    "uses" => "ManageController@get_category",
]);
Route::get('/get/sub/category/list', [
    "uses" => "ManageController@get_sub_category",
]);
Route::get('/get/description/list/{id}', [
    "uses" => "ManageController@get_sub_category_list",
]);
Route::get('/get/sub/description/list/{id}', [
    "uses" => "ManageController@get_sub_description_list",
]);
Route::post('/Manage/Save/Category', [
    "uses" => "ManageController@store_category",
]);
Route::post('/Manage/Save/Description', [
    "uses" => "ManageController@store_description",
]);
Route::post('/Manage/Save/Sub/Description', [
    "uses" => "ManageController@store_sub_description",
]);
Route::post('/Manage/Save/Field', [
    "uses" => "ManageController@store_fields",
]);