<?php

use Illuminate\Support\Facades\Route;

///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can auth web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
///*

//Admin
Route::group(['prefix' => 'Admin', 'middleware' => ['manual.auth']], function () {
    Route::get('', [
        'uses' => 'AdminControllerWithRepos@index',
        'as' => 'admin.index'
    ]);

    Route::get('show/{Ad_id}',[
        'uses' => 'AdminControllerWithRepos@show',
        'as' => 'admin.show'
    ]);

    Route::get('update/{Ad_id}',[
        'uses' => 'AdminControllerWithRepos@edit',
        'as' => 'admin.edit'
    ]);

    Route::post('update/{Ad_id}',[
        'uses' => 'AdminControllerWithRepos@update',
        'as' => 'admin.update'
    ]);

    Route::get('delete/{Ad_id}', [
        'uses' => 'AdminControllerWithRepos@confirm',
        'as' => 'admin.confirm'
    ]);

    Route::post('delete/{Ad_id}',[
        'uses' => 'AdminControllerWithRepos@destroy',
        'as' => 'admin.destroy'
   ]);
});

//Customer
Route::group(['prefix' => 'Customer', 'middleware' => ['manual.auth']], function () {
    Route::get('', [
        'uses' => 'CusControllerWithRepos@index',
        'as' => 'customer.index'
    ]);

    Route::get('show/{Cus_id}', [
        'uses' => 'CusControllerWithRepos@show',
        'as' => 'customer.show'
    ]);

    Route::get('update/{Cus_id}',[
        'uses' => 'CusControllerWithRepos@edit',
        'as' => 'customer.edit'
    ]);

    Route::post('update/{Cus_id}',[
        'uses' => 'CusControllerWithRepos@update',
        'as' => 'customer.update'
    ]);

    Route::get('delete/{Cus_id}', [
        'uses' => 'CusControllerWithRepos@confirm',
        'as' => 'customer.confirm'
    ]);

    Route::post('delete/{Cus_id}',[
        'uses' => 'CusControllerWithRepos@destroy',
        'as' => 'customer.destroy'
    ]);
});

//Category
Route::group(['prefix' => 'Category', 'middleware' => ['manual.auth']], function () {
    Route::get('', [
        'uses' => 'CategoryControllerWithRepos@index',
        'as' => 'category.index'
    ]);

    Route::get('show/{Cate_id}',[
        'uses' => 'CategoryControllerWithRepos@show',
        'as' => 'category.show'
    ]);

    Route::get('create',[
        'uses' => 'CategoryControllerWithRepos@create',
        'as' => 'category.create'
    ]);

    Route::post('create',[
        'uses' => 'CategoryControllerWithRepos@store',
        'as' => 'category.store'
    ]);

    Route::get('update/{Cate_id}',[
        'uses' => 'CategoryControllerWithRepos@edit',
        'as' => 'category.edit'
    ]);

    Route::post('update/{Cate_id}',[
        'uses' => 'CategoryControllerWithRepos@update',
        'as' => 'category.update'
    ]);

    Route::get('delete/{Cate_id}', [
        'uses' => 'CategoryControllerWithRepos@confirm',
        'as' => 'category.confirm'
    ]);

    Route::post('delete/{Cate_id}',[
        'uses' => 'CategoryControllerWithRepos@destroy',
        'as' => 'category.destroy'
    ]);
});

//Electronics
Route::group(['prefix' => 'Product', 'middleware' => ['manual.auth']], function () {
    Route::get('', [
        'uses' => 'ElectronicsControllerWithRepos@index',
        'as' => 'product.index'
    ]);

    Route::get('show/{Elec_id}',[
        'uses' => 'ElectronicsControllerWithRepos@show',
        'as' => 'product.show'
    ]);

    Route::get('create',[
        'uses' => 'ElectronicsControllerWithRepos@create',
        'as' => 'product.create'
    ]);

    Route::post('create',[
        'uses' => 'ElectronicsControllerWithRepos@store',
        'as' => 'product.store'
    ]);

    Route::get('update/{Elec_id}',[
        'uses' => 'ElectronicsControllerWithRepos@edit',
        'as' => 'product.edit'
    ]);

    Route::post('update/{Elec_id}',[
        'uses' => 'ElectronicsControllerWithRepos@update',
        'as' => 'product.update'
    ]);

    Route::get('delete/{Elec_id}', [
        'uses' => 'ElectronicsControllerWithRepos@confirm',
        'as' => 'product.confirm'
    ]);

    Route::post('delete/{Elec_id}',[
        'uses' => 'ElectronicsControllerWithRepos@destroy',
        'as' => 'product.destroy'
    ]);
});

//Login
Route::group(['prefix' => 'auth'], function (){
    Route::get('login',[
        'uses' => 'ManualAuthController@ask',
        'as' => 'auth.ask'
    ]);

    Route::post('login',[
        'uses' => 'ManualAuthController@signin',
        'as' => 'auth.signin'
    ]);

    Route::get('logout',[
        'uses' => 'ManualAuthController@signout',
        'as' => 'auth.signout'
    ]);
});

//Register
Route::group(['prefix' => 'register'], function (){
    Route::get('',[
        'uses' => 'CusControllerWithRepos@registerCus',
        'as' => 'customer.registerCus'
    ]);

    Route::post('',[
        'uses' => 'CusControllerWithRepos@store',
        'as' => 'customer.store'
    ]);
});

//Homepage
Route::group(['prefix' =>  'electronics'], function (){
    Route::get('',[
        'uses' => 'MainpageControllerWithRepos@index',
        'as' => 'harvelElec.homepage'
    ]);

    Route::get('detail/{Elec_id}',[
        'uses' => 'MainpageControllerWithRepos@detail',
        'as' => 'harvelElec.detail'
    ]);

    Route::get('search',[
        'uses' => 'MainpageControllerWithRepos@search',
        'as' => 'harvelElec.search'
    ]);

    Route::get('select/{Cate_id}',[
        'uses' => 'MainpageControllerWithRepos@select_category',
        'as' => 'harvelElec.select'
    ]);

    Route::get('feedback',[
        'uses' => 'MainpageControllerWithRepos@feedback',
        'as' => 'harvelElec.feedback'
    ]);

    Route::get('contact',[
        'uses' => 'MainpageControllerWithRepos@contact',
        'as' => 'harvelElec.contact'
    ]);

    Route::get('introduction',[
        'uses' => 'MainpageControllerWithRepos@intro',
        'as' => 'harvelElec.intro'
    ]);
});




