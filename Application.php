<?php

/**
 * 
 * 
 */

$autoload = function ($class) {
    $class = str_replace('\\', '/', $class);

    if (is_file('classes/' . $class . '.php')) {
        include('classes/' . $class . '.php');
        // } else if (is_file('../classes/' . $class . '.php')) {
        //     include('../classes/' . $class . '.php');
        // } else if (is_file('../../classes/' . $class . '.php')) {
        //     include('../../classes/' . $class . '.php');
        // } else if (is_file('./controllers/' . $class . '.php')) {
        //     include('./controllers/' . $class . '.php');
    } else if (is_file('./' . $class . '.php')) {
        include('./' . $class . '.php');
    } else if (is_file($class . '.php')) {
        include($class . '.php');
    }
};
spl_autoload_register($autoload);


class Application
{
    function execute()
    {
        // $url = isset($_GET['url']) ? $_GET['url'] : 'Home';
        $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Home';

        print_r($_GET);
        $url = ucfirst($url);

        if (file_exists('controllers/' . $url . '.php')) {
            // include controller

            // make space for namespace
            $url = 'controllers\\' . $url;
            $controler = new $url();
            $controler->execute();
        } else {
            die('Não existe controlador para este endereço');
        }
    }
}
