<?php

namespace App\Controllers;

use App\Models\Test;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function new_index()
    {
        $test = new Test();
        $data = $test->findAll();
        $joinData = $test->getJoinData();

        echo "<pre>";
        print_r($joinData);

        return view('/pages/home');
    }
}
