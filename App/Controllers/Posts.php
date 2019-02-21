<?php

namespace App\Controllers;

class Posts extends \Core\Controller
{
    public function indexAction()
    {
        echo 'Hello from the index action in the Posts controller!';
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