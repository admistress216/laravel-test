<?php

//  /admin/abc
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('login', 'EntryController@loginForm');

});