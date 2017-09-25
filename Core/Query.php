<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Query
 *
 * @author Dyeimerson
 */

require_once '../Conexao/Conexao.php';

class Query {
    //put your code here
    public function Execute($str){
        $con = new Conexao();        
        return mysqli_query($con->getConexao(), $str);
    }
}