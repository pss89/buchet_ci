<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        
        return view('/pages/users/user');
    }

    public function join()
    {
        
        return view('/pages/users/join');
    }
}
