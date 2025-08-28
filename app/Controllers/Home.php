<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
     public function home(): string
    {
        return view('home.php');
    }
     public function loginin(): string
    {
        return view('login.php');
    }
}
