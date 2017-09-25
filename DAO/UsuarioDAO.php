<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../Entidade/Usuario.php';
require_once '../Core/Query.php';

class UsuarioDAO extends Usuario {
    //put your code here
    private $Qr = null;
    
    public function __construct() {
        $this->Qr = new Query();
    }
    
    public function validar($user, $senha){
        $sql = "select * from login where nome_usuario ='$user' and senha_usuario ='$senha'";
        $resultado = $this->Qr->Execute($sql);        
        
        if (mysqli_num_rows($resultado) > 0) {
            return true;
        }else{
           return false; 
        }
    }
    
    public function novo($nome, $senha, $email) {
        $sql = "insert into login (nome_usuario, senha_usuario, email_usuario) values ('$nome', '$senha', '$email')";
        try {
          $this->Qr->Execute($sql);
          return true;
        }catch(Exception $e) {
          return false;  
        }
    }
}

