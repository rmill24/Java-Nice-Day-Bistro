<?php

namespace App\Controllers;
use App\Models\UserModel;

class HomeController extends BaseController
{
    public function index() {
        return view('homepage');
    }
}
