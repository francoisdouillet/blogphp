<?php

namespace App\Controller;

class HomeController
{
    public function index()
    {
        require(ROOT . '/src/view/homepage.php');
    }
}