<?php

namespace App\Http\Controllers\Pqadmin;

Class WebController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('pqadmin.web_setting');
    }
}