<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuario {
    //put your code here
    private $id_usuario;
    private $nome_usuario;
    private $email_usuario;
    private $senha_usuario;
    
    function getId_usuario() {
        return $this->id_usuario;
    }

    function getNome_usuario() {
        return $this->nome_usuario;
    }

    function getEmail_usuario() {
        return $this->email_usuario;
    }

    function getSenha_usuario() {
        return $this->senha_usuario;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNome_usuario($nome_usuario) {
        $this->nome_usuario = $nome_usuario;
    }

    function setEmail_usuario($email_usuario) {
        $this->email_usuario = $email_usuario;
    }

    function setSenha_usuario($senha_usuario) {
        $this->senha_usuario = $senha_usuario;
    } 
    
}

