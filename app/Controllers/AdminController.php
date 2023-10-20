<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{

    public function index(){
        return view('admin/dashboard');
    }
    public function user()
    {
        return view('admin/manajement/user');
    }
    public function eo()
    {
        return view('admin/manajement/eo');
    }
}