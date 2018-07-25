<?php

Route::group(['middleware' => ['web','Karyawan'], 'prefix' => 'karyawan', 'namespace' => 'Modules\Karyawan\Http\Controllers'], function()
{
    Route::get('/', 'KaryawanController@index');
});
