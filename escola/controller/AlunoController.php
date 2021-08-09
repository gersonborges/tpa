<?php
class AlunoController{


    public function create(){

        $obj = new Aluno();

        if( isset($_POST['turma']) && isset($_POST['numero']) && isset($_POST['nome']) ) {

            $obj->setTurma($_POST['turma']);
            $obj->setNumero($_POST['numero']);
            $obj->setNome($_POST['nome']);

            $obj->create();

        }

        include 'view/aluno_create.php';

    }

    public function read(){

    }

    public function update(){

    }

    public function delete(){

    }


}
