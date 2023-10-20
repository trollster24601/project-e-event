<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EoController extends BaseController
{

    public function index(){
        return view('eo/dashboard');
    }
}