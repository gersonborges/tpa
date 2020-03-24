<?php
require_once 'model/Usuario.php';

class UsuarioController
{

    public function all(){

        $obj = new Usuario();
        $usuarios = $obj->all();

        include 'view/Usuario_all.php';

    }

}


