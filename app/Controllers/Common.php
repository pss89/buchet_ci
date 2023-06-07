<?php

namespace App\Controllers;

class Common extends BaseController
{
    // public function header()
    // {
    //     return view('/pages/common/header');
    // }

    // public function footer()
    // {
    //     return view('/pages/common/footer');
    // }

    public function index()
    {
        
        return view('/pages/main/main');

        // $common = new \App\Controllers\Common();

        // $header = $this->header();
        // $footer = $this->footer();
        
        // return view('/pages/main/main',['header' => $header, 'footer' => $footer]);
        // return view('errors/html/error_404',array('message'=>'일시적인 장애 발생'));

        // if($this->request->isAJAX()) {
        // } else {
            // return view('errors/html/error_404',array('message'=>'일시적인 장애 발생'));
        // }
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
