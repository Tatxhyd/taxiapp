<?php

Route::group(['prefix' => 'drivers', 'middleware'=>'web','namespace' => 'App\Modules\Driver\Controllers'], function () {
	Route::get('/', ['as' => 'driver.index', 'uses' => 'DriverController@index']);
});
