<?php

class UsuarioDAO{
    public $nome;
    public $email;
    public $senha;

    public function inserir(){
        $con = mysqli_connect("localhost", "root", "etecia", "projetopw");
        $sql = "INSERT INTO usuarios VALUES (0, '$this->nome', '$this->email', '$this->senha')";
        $rs = $con->query($sql);
        if ($rs) header("Location: Perguntas.php");
        else echo $con->error;
    }

    public function biscar(){

        $con = mysql_connect("localhost", "root", "", "projetopw");
        $sql = "SELECT * from Perguntas";
        $con -> query($sql);
        $rs = $con -> query($sql);
        print_r($rs);

    }
}