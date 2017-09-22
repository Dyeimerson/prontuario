<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Acesso </title>
	<style>
		body{
			background-color: #11a6d4;
		}

		#login-box{
			background-color: #1992b7;
			width: 480px;
			height: 420px;
			margin: 140px auto 0px;
			border-radius: 5px;
		}
		#login-box-interno{
         width: 460px;
         height: 400px;
         background-color: #fdfdfd;
         position: absolute;
         margin: 10px;
         border-radius: 5px;
         box-shadow: 0px 0px 5px black;
         overflow: hidden; 
		}

		#login-box-label{
			background-color: #EEE9E9;
			height: 60px;
			text-align: center;
			font: bold 20px/55px sans-serif;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px; 

			border-bottom: 1px 0px 3px white;
			box-shadow: 1px 0px 3px black;
			color: #555555;
			text-shadow: 1px 0px 1px white;
		}

        .input-div{
        	margin: 35px;
        	padding: 4px;
        	background-color: #f2f5f7;
        	border-radius: 20px;
        }
        .input-div input{
        	width: 375px;
        	height: 35px;
        	padding-left: 15px;
        	font: normal 18px sans-serif;
        	color: #aeaeae;
        	border-radius: 1px solid #bfc4c6;
        	outline: none;
        }

        .input-div:hover{
        	background-color: #e0f1fc;
        }
        .input-div:hover input{
        	border-color: #7dc6dd;
        }
        #input-senha{
        	margin-top: -12px;
        }
        .botoes{
            width: 310px;
            margin-left: 175px;
            float: left;
        }   
        #botao{
        	float: right;
        	background-color: #e0f1fc;
        	padding: 10px 15px;
        	margin-right: 20px;
        }

	</style>
</head>
<body class="acesso">
    
    
   
    
    <form method="post" action="../Controller/UsuarioController.php?op=1" id="formlogin" name="formlogin" ></form>
	<div id="login-box">
   
    <div id="login-box-interno">
   	   <div id="login-box-label"> Entre na sua conta </div>
   	
   	       <div class="input-div" id="input-usuario">
   		     <input type="text" value="Usuário ou Email"/>
   	       </div>

           <div class="input-div" id="input-senha" >
           	<input type="text" value="senha"/>
           </div>

           <div class="botoes">
           	<div id="botao">Login</div>
           	<div id="lembra-senha"> <input type="checkbox"/> Lembra minha senha </div>
           </div>
        </div>
    </div>
	
</body>
</html>
