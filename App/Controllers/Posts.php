<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;
use App\Models\Post;

class Posts extends Controller
{
    public function indexAction()
    {
        $posts = Post::getAll();

        View::renderTemplate('posts/index.html', ['posts' => $posts]);
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