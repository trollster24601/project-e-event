<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        return view('user/dashboard');
    }

    public function eventDescription(){
        return view("user/event-description");
    }
}