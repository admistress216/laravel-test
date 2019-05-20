<?php

//  /admin/abc
Route::group(['prefix' => 'admin'], function(){
    Route::get('login', 'Admin\EntryController@login');

});