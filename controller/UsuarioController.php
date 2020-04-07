<?php
require_once 'model/Usuario.php';

class UsuarioController
{

    public function all(){

        $obj = new Usuario();
        $usuarios = $obj->all();

        include 'view/Usuario_all.php';

    }
    
    
     public function create()
    {
        $obj = new Usuario();

        if (isset($_POST["email"]) && isset($_POST["nome"])) {

            $obj->setEmail($_POST["email"]);
            $obj->setNome($_POST["nome"]);

            $obj->create();

        }

        require_once "view/Usuario_create.php";
    }

}


