<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioController
 *
 * @author Dyeimerson
 */

require_once '../DAO/UsuarioDAO.php';

$op = $_REQUEST["op"];

$senha = $_REQUEST["senha"];
$usuario = $_REQUEST["login"];
$email   = $_REQUEST["email"];

class UsuarioController {
    //put your code here
    public function validar($usuario, $senha) {
        $user = new UsuarioDAO();
        if ($user->validar($usuario, $senha)) {
            //echo "usuario valido";
            header("location:../Views/telaPrincipal.php");
        }else{
            header("location:../Views/prontMedico.php");
           // echo "usuario invalido.";
        }
    }
    
    public function novo($nome, $senha, $email) {
        $user = new UsuarioDAO();
        $user->novo($nome, $senha, $email);
    }
}

$controller = new UsuarioController();
if ($op == 1) {
    $controller->validar($usuario, $senha);
}else if ($op == 2) {
    if ($controller->novo($nome, $senha, $email)) {
       echo "<script>alert('Registro gravado com sucesso.');</script>";
    }
}



