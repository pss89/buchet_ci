<?php

namespace App\Controllers;

use App\Models\Test;

class CustomController extends BaseController
{
    public function index()
    {
        
        // $common = new \App\Controllers\Common();

        // $header = $common->header();
        // $footer = $common->footer();
        
        // return view('/pages/main/main',['header' => $header, 'footer' => $footer]);
        // return view('errors/html/error_404',array('message'=>'일시적인 장애 발생'));
    }

    // public function new_index()
    // {
    //     // $db = \Config\Database::connect();
    //     // echo "<pre>";
    //     // print_r($db);
    //     // exit;

    //     // $test = new Test();
    //     // $data = $test->findAll();
    //     // $joinData = $test->getJoinData();

    //     // echo "<pre>";
    //     // print_r($joinData);

    //     return view('/pages/home');
    // }
}
