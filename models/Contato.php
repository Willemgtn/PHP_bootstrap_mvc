<?php

namespace models;

class Contato //extends Controller
{

    // function __construct()
    // {
    //     // $this->view = new \views\Contato('contato');
    //     // $this->view = new \views\MainView('contato');
    // }
    // function execute()
    // {
    //     // echo '<h3> Contato Controller</h3>';
    //     // // echo 'Pagina contato sendo executada';
    //     // $this->view->render(['titulo' => 'Contato']);
    // }
    static function enviarFormulario()
    {
        $mail = new \Email;
        $mail->addrecipient('test@test.com', 'name');
        $mail->formatMail([
            'subject' => 'test',
            'body' => 'email body'
        ]);
        return $mail->sendEmail();
    }
}
