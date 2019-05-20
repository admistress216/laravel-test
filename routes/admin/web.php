<?php

//  /admin/abc
Route::group(['prefix' => 'admin'], function(){
    Route::get('abc', function (){
        return 'anker';
    });
});