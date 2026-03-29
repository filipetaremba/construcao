<?php

namespace App\Controllers;

class Teste extends BaseController
{
    public function email()
    {
        $email = \Config\Services::email();

        $email->setTo('filipetaremba0@gmail.com'); // pode ser o mesmo
        $email->setSubject('Teste CodeIgniter');
        $email->setMessage('<h2>Email funcionando 🚀</h2>');

        if ($email->send()) {
            echo '✅ Email enviado com sucesso!';
        } else {
            echo '<pre>';
            print_r($email->printDebugger(['headers']));
            echo '</pre>';
        }
    }
}