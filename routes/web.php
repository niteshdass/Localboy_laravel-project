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
Route::get('/home','homeController@index' )->name('home');


//online order-----------------------------------------------------------------------------
Route::get('/online_order','OrderController@online_order' )->name('online_order');
Route::get('/online_orde/{id}','OrderController@online_orde' )->name('online_orde');
Route::post('/online_order_request','OrderController@online_order_request' )->name('online_order_request');


//end online order--------------------------------------------------------------------------


//product---------------------------------------------------------------------
Route::get('/product/{id}','ProductController@product' )->name('product');

//donar..................................................................................
Route::get('/donar_list','DonarController@donar_list' )->name('donar_list');
Route::post('/registrestion_data','DonarController@registrestion_data' )->name('registrestion_data');
Route::post('/user_login','DonarController@user_login' )->name('user_login');
Route::get('/registretion','DonarController@registretion' )->name('registretion');
Route::get('/user_logout','DonarController@user_logout' )->name('user_logout');
Route::post('/donar_data/{id}','DonarController@donar_data' )->name('donar_data');
Route::get('/donate','DonarController@donate' )->name('donate');
//end donar..............................................................................


//profile-------------------------------------------------------------------------------------
Route::get('/profile/{id}','homeController@profile_user' )->name('profile');
Route::get('/donarp/{id}','homeController@profile' )->name('donarp');


Route::get('/take','homeController@take' )->name('take');
Route::get('/contact','homeController@contact' )->name('contact');




///admin

Route::get('/admin','AdminController@admin' )->name('admin');
Route::get('/login','AdminController@login' )->name('login');
Route::post('/alogin','AdminController@adad' )->name('alogin');



//category
Route::get('/add_cat','CategoryController@add_cat' )->name('add_cat');
Route::get('/manage_cat','CategoryController@manage_cat' )->name('manage_cat');
Route::get('/delete_cat/{id}','CategoryController@delete_cat' )->name('delete_cat');

Route::post('/add_cate','CategoryController@add_cate' )->name('add_cate');

//catego

//donars_confirm dasnitesth780@gmail.ctomin admin------------------------------------------------------
Route::get('/donars_confirm','AdminController@donars_confirm' )->name('donars_confirm');
Route::get('/active_me/{id}','AdminController@active_me' )->name('active_me');
Route::get('/unactive_me/{id}','AdminController@unactive_me' )->name('unactive_me');
Route::get('/delete_donars/{id}','AdminController@delete_donars' )->name('delete_donars');
//-----------------------------------------------------------------------------







//donation_products-------------------------------------------------------------
Route::get('/donation_products','AdminController@donation_products' )->name('donation_products');
Route::get('/show_me/{id}','AdminController@show_me' )->name('show_me');
Route::get('/delete_products/{id}','AdminController@delete_products' )->name('delete_products');
Route::get('/hide_me/{id}','AdminController@hide_me' )->name('hide_me');




//order request-------------------------------------------------------------
Route::get('/donation_request','AdminController@donation_request' )->name('donation_request');
Route::get('/make_donar/{id}','AdminController@make_donar' )->name('make_donar');
Route::get('/delete_products/{id}','AdminController@delete_products' )->name('delete_products');
Route::get('/dhide_me/{id}','AdminController@dhide_me' )->name('dhide_me');






///////////////////////wite information///////////////////////////
Route::post('/information','homeController@information' )->name('information');
