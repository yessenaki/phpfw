<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class Posts extends Controller
{
    public function indexAction()
    {
        // echo 'Hello from the index action in the Posts controller!';
        View::renderTemplate('posts/index.html');
    }

    public function addNewAction()
    {
        echo 'Hello from the addNew action in the Posts controller!';
    }

    public function editAction()
    {
        echo 'Hello from the edit action in the Posts controller!';
    }
}