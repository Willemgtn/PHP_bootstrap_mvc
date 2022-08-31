<?php

namespace controllers;

class Sobre extends Controller
{

    function __construct()
    {
        $this->view = new \views\MainView('sobre');
    }
    function execute()
    {
        // echo '<h1> Contato Controller</h1>';
        $this->view->render(['titulo' => 'Sobre']);
    }
}
