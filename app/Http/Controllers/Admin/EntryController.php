<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EntryController extends Controller
{
    /**
     * 登录视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loginForm(){
        return view('admin/entry/login');
    }

    /**
     * 登录认证
     */
    public function login() {

    }
}
