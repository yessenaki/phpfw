<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class Home extends Controller
{
    protected function before()
    {
        // echo "(before) ";
        // return false;
    }

    protected function after()
    {
        // echo " (after)";
    }

    public function indexAction()
    {
        /* 
        View::render('Home/index.php', [
            'name' => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);
         */
        View::renderTemplate('home/index.html', [
            'name' => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);
    }
}