<?php

echo '<meta charset=UTF-8>';
include_once 'conexao/conectaToca.inc';
$email = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$tipoUsuario = 'RES';
$query = "INSERT INTO usuario (EMAIL_LOGIN, SENHA_LOGIN, NOME_USUARIO, TIPO_USUARIO)";
$query.= "VALUES ('$email', '$senha', '$nome', '$tipoUsuario')"; 

if (mysql_query($query)) {
    echo '<script>alert("Seu cadastro foi realizado com sucesso!") </script>';
    echo '<script language = "JavaScript">
                location.href="index.php";
                </script>';
   
}  else {
        echo '<script> 
    alert("Não foi possível seu cadastro!")
    location.href="index.php";
    </script>';
    
            
}