<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;


class Test extends Controller {
    public function index() {
        echo App::environment();
    }
}