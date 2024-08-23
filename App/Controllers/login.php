<?php

namespace App\Controllers;

use App\Models\M_Nelayan;

class login extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new M_Nelayan;
    }
    public function index()
    {


        return view('/login/index');
    }
}
