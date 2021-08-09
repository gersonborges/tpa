<?php
class Aluno{

    private $id;
    private $turma;
    private $numero;
    private $nome;

    private $con;

    public function __construct()
    {
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);        
    }

    public function all(){

        $sql = $this->con->prepare("SELECT * FROM aluno");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;

    }


    public function create(){

        $sql = $this->con->prepare("INSERT INTO aluno (turma, numero, nome) VALUES (?,?,?)");
        $sql->execute([$this->getTurma(), $this->getNumero(), $this->getNome()]);
        if( $sql->errorCode() != "00000"){
            echo $sql->errorInfo()[2];
        }

    }

    public function read(){

        $sql = $this->con->prepare("SELECT * FROM aluno WHERE id=?");
        $sql->execute([$this->getId()]);
        $row = $sql->fetchObject();
        return $row;

    }

    public function update(){

        $sql = $this->con->prepare("UPDATE aluno SET turma=?, numero=?, nome=? WHERE id=?");
        $sql->execute([$this->getTurma(), $this->getNumero(), $this->getNome(), $this->getId()]);
        if( $sql->errorCode() != "00000"){
            echo $sql->errorInfo()[2];
        }

    }

    public function delete(){

        $sql = $this->con->prepare("DELETE FROM aluno WHERE id=?");
        $sql->execute([$this->getId()]);
        if( $sql->errorCode() != "00000"){
            echo $sql->errorInfo()[2];
        }

    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of turma
     */ 
    public function getTurma()
    {
        return $this->turma;
    }

    /**
     * Set the value of turma
     *
     * @return  self
     */ 
    public function setTurma($turma)
    {
        $this->turma = $turma;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}
