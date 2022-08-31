<?php

namespace controllers;

class Contato extends Controller
{
    // private $view;

    function __construct()
    {
        // $this->view = new \views\Contato('contato');
        $this->view = new \views\MainView('contato');
    }
    function execute()
    {
        // echo '<h3> Contato Controller</h3>';
        // // echo 'Pagina contato sendo executada';
        // global $submitResponse;
        if (isset($_POST['submit'])) {
            // global $submitResponse;
            if (\models\Contato::enviarFormulario() !== true) {
                $submitResponse = '<div class="alert alert-danger" role="alert">Your message could not be send</div>';
            } else {
                echo '<div class="alert alert-success" role="alert">Your message was sended successfully</div>';
                header('Location: ./contato/sucesso');
            }
        }
        $this->view->render(['titulo' => 'Contato']);

        // \Router::rota('Contato', function () {
        //     $this->view = new \views\MainView('contato');
        //     $this->view->render(['titulo' => 'Contato']);
        // });

        // \Router::rota('contato/sucesso', function () {
        //     $this->view = new \views\MainView('contato');
        //     $this->view->render([
        //         'titulo' => 'Contato',
        //         // 'submitResponse' => $submitResponse
        //     ]);
        // });
        // \Router::rota('contato/?', function ($par) {
        //     print_r($par);
        //     $this->view = new \views\MainView('contato');
        //     $this->view->render(['titulo' => 'Contato']);
        // });
    }
}
