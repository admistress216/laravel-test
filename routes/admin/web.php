<?php

//  /admin/abc
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    //后台登录
    Route::get('/login', 'EntryController@loginForm');
    //登录处理
    Route::post('/login', 'EntryController@login');
    //后台首页
    Route::get('/index', 'EntryController@index');
    //退出
    Route::get('/logout', 'EntryController@logout');
});