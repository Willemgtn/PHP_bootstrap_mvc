<?php

namespace views;

class MainView
{
    private $filename;
    private $header;
    private $footer;

    const pageTitle = 'MVC - Projeto 3';
    const styleFolderUrl = '/danki/dev1.0/projeto3-mvc/views/pages/css/';

    public $menuitems = ['Home', 'Sobre', 'Contato'];

    function __construct($filename, $header = 'header', $footer = 'footer')
    {
        $this->filename = $filename;
        $this->header = $header;
        $this->footer = $footer;
    }
    function render(array $arr = [])
    {
        // echo '<h1> Contato Page</h1>';

        include('pages/templates/' . $this->header . '.php');
        include('pages/' . $this->filename . '.php');
        include('pages/templates/' . $this->footer . '.php');
    }
}
