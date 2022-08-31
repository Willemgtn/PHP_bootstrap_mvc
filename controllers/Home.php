<?php

namespace controllers;

class Home extends Controller
{
    function __construct()
    {
        // $this->view = new \views\Contato('contato');
        $this->view = new \views\MainView('home');
    }
    function execute()
    {
        echo '<h1> Home Page</h1>';
        $this->view->render(['titulo' => 'Home']);
    }
}
