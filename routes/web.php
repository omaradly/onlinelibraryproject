<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/homepage', function () {
    return view('homepage.home');
})->name('homepage');
/* ------------------------------------- Books ----------------------------------- */
Route::get('Books/ShowallBooks','BookController@showallproduct')->name('books.showall');
Route::get('books/showone/{id}','BookController@showoneproduct')->name('books.showonebook');

/* ------------------------------------- Cateogries ----------------------------------- */
Route::get('cateogry/showallCategories','CategoryController@showallproduct')->name('Category.showallCateogries');
Route::get('cateogry/showonecateogry/{id}','CategoryController@showoneproduct')->name('Category.showonecateogry');



 /* ========================================================================== */
 /* ========================================================================== */
 /* ========================================================================== */
 /* ========================================================================== */
 /* ======================= start user is logind side ===================== */
 Route::group(['middleware' => 'is_login'], function () {
    /* ----------------------------------- login and register --------------------------------- */
    /* ------------------------------ logout---------------------------------- */
    Route::get('user/logout','authcontroller@logout')->name('auth.logout');

    /* ------------------------------ Update user data ---------------------------------- */
    Route::get('user/updatadata','authcontroller@updateData')->name('auth.updatedata');
    Route::post('cateogry/updatedbuser','authcontroller@updateDatastore')->name('auth.updatedbdata');
 });
 /* ======================= end   user is logind side ===================== */
 /* ========================================================================== */
 /* ========================================================================== */
 /* ========================================================================== */
 /* ========================================================================== */
 /* ======================= start user is logedout side ===================== */
 Route::group(['middleware' => 'is_Logedout'], function () {
    /* ----------------------------------- login and register --------------------------------- */
    /* ------------------------------ sign up ---------------------------------- */
    Route::get('user/register','authcontroller@showregister')->name('auth.register');
    Route::post('user/registerstore','authcontroller@showregisterstore')->name('auth.registerstore');
    /* ------------------------------ login---------------------------------- */
    Route::get('user/login','authcontroller@showlogin')->name('auth.login');
    Route::post('user/loginstore','authcontroller@showloginstore')->name('auth.loginstore');
    /* ------------------------------ login With githup---------------------------------- */
    Route::get('user/login/githup','authcontroller@github')->name('auth.login.github');
    Route::get('user/login/githupRedirect','authcontroller@githubRedircet')->name('auth.login.githubRedirect');
    /* ------------------------------ login With facebook---------------------------------- */
    Route::get('user/login/facebook','authcontroller@facebook')->name('auth.login.facebook');
    Route::get('user/login/facebookRedirect','authcontroller@facebookRedircet')->name('auth.login.facebookRedirect');
 });
 /* ======================= end   user is logedout side ===================== */
 /* ========================================================================== */
 /* ========================================================================== */
 /* ========================================================================== */
 /* ========================================================================== */
 /* ======================= start user is Admin side ===================== */
 Route::group(['middleware' => 'is_admin'], function () {
    /* add new catogry */
    Route::get('cateogry/createnewCategory','CategoryController@createproduct')->name('Category.createnewcateogry');
    Route::post('cateogry/storenewcateogry','CategoryController@storeproduct')->name('Category.storenewcateogry');
    /* delet catogry */
    Route::get('cateogry/deletecateogry/{id}','CategoryController@deleteproduct')->name('Category.deletecateogry');
    /* update catogry */
    Route::get('cateogry/updatecateogry/{id}','CategoryController@updateproduct')->name('Category.updatecateogry');
    Route::post('cateogry/updatedbcateogry/{id}','CategoryController@updatedbproduct')->name('Category.updatedbcateogry');
    /* ================================== books========================== */
    //  add new book 
    Route::get('books/createnewbook','BookController@createproduct')->name('books.create');
    Route::post('books/storenewbook','BookController@storeproduct')->name('books.storecreate');
    // remove book
    /* delete book */
    Route::get('books/deletebook/{id}','BookController@deleteproduct')->name('books.deletebook');
    /* update products */
    Route::get('books/updatebook/{id}','BookController@updateproduct')->name('updatebook');
    Route::post('updatedbbook/{id}','BookController@updatedbproduct')->name('updatedbbook');
     
 });
 /* ======================= end   user is Admin side ===================== */
