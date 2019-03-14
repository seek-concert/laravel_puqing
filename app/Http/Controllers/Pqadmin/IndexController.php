<?php

namespace App\Http\Controllers\Pqadmin;

Class IndexController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('pqadmin.index');
    }
}