<?php
class UsuarioController{

    public function all(){        
        
        // INSTANCIANDO O OBJETO usuario DA CLASSE Usuario
        $objeto = new Usuario();

        // RECUPERAR OS REGISTROS DO BANCO DE DADOS
        $usuarios = $objeto->all();

        // RECUPERANDO O VALORES DOS ATRIBUTOS E MOSTRANDO NA TELA
        include "view/usuarios.php";

    }

}
