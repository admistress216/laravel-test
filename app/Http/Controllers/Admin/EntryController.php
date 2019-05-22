<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class EntryController extends Controller
{

    public function __construct()
    {
        //登录验证中间件排除登录页面
        $this->middleware('admin.auth')->except(['loginForm', 'login']);
    }

    public function index() {
        return view('admin/entry/index');
    }

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
    public function login(Request $request) {
        $status = Auth::guard('admin')->attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);

        if ($status) {
            //登录成功
            return redirect('/admin/index');
        }
        return redirect('/admin/login')->with('error', '用户名或密码错误');
    }

    public function logout() {
        Auth::guard('admin')->logout();

        return redirect('/admin/login');
    }
}
