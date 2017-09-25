<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author Dyeimerson
 */
class Conexao {
    //put your code here
    private $host = "localhost:8080";
    private $user = "root";
    private $senha = "";
    private $db = "prontmed";
    private $conexao; 
    
    public function _construct(){
            
        $this->$this->conexao = mysql_connect($this->host, $this->user, $this->senha, $this->db);
            $this->conexao->set_charset("utf8");
            
    }
    public function testeConnection(){ 
    
        if ($this->conexao){
            echo "banco conectado";
        } else {
            echo "falha na conexao";
        }
            
}

    }