<?php

namespace App\Controller;

class PostController
{
    public function index()
    {
        require(ROOT . 'src/view/post.php');
    }
}