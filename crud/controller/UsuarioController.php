<?php

class UsuarioController{

    public function all(){
        $obj = new Usuario();
        $obj->all();
        include "view/usuario_all.php";
    }

    public function create(){
        $obj = new Usuario();

        if( isset($_POST['email']) && isset($_POST['nome']) ){
            $obj->setEmail($_POST['email']);
            $obj->setNome($_POST['nome']);
            $obj->create();
        }

        include "view/usuario_create.php";

    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){

    }


}
