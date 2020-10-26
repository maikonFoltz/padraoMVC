<?php

namespace src\controllers;

use \core\Controller;
use src\models\Usuario;

class UsuariosController extends Controller
{

    public function adicionar()
    {
        $this->render('adicionar');
    }
    public function adicionarAction()
    {
        $email = filter_input(INPUT_POST, 'email');
        $senha = filter_input(INPUT_POST, 'senha');
        $nome = filter_input(INPUT_POST, 'nome');

        if ($nome && $email) {
            $data = Usuario::select()->where('email', $email)->execute();

            if (count($data) === 0) {
                $data = Usuario::insert([                    
                    'email' => $email,
                    'senha' => md5($senha),
                    'nome' => $nome
                ])->execute();
                $this->redirect('/');
                exit;
            }
        }
        $this->redirect('/novo');
    }
}
