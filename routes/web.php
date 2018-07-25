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
Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});
// Route::group(['prefix' => 'admin','middleware' => ['Admin','auth']],function(){
	
// });
// Route::group(['prefix' => 'manager','middleware' => ['Manager','auth']],function(){
	
// });
Route::group(['prefix' => 'karyawan','middleware' => ['Karyawan','auth']],function(){
});


Route::get('/404', function() {
    return view('404.404_Admin');
});
Route::get('/logout','logout@logout');
