<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function new_index()
    {
        return view('/pages/home');
    }
}
