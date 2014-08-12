<?php

echo '<meta charset=UTF-8>';
include 'conexao/conectaToca.inc';
$codigo_usuario = $_REQUEST['codigo'];

$nome = $_POST['nome'];
$email = $_POST['login'];
$senha = $_POST['senha'];
$confirme_senha = $_POST['confsenha'];
        
        if($senha !== $confirme_senha)
        {
            echo 'Senha não confere! <br/>';
            echo '<a href="javascript:history.back(1)"> Voltar </a>';
            
        }
        
        else {
            $sql = "UPDATE usuario SET NOME_USUARIO='$nome', EMAIL_LOGIN='$email', SENHA_LOGIN='$senha'";
            $sql.= "WHERE COD_LOGIN = '$codigo_usuario'";
           //echo $sql;
        }

        
        if(mysql_query($sql)){
            echo "<label> Dados Atualizados: <br/> <br/><label>";
            echo $nome . "<br/>";
            echo $email . "<br/>";
            echo $senha . "<br/>";
            echo $confirme_senha . "<br/>";
            echo 'Dados Atualizados com sucesso !';
                  
        }
        
        else {
            echo mysql_error() . '<br/>';
        } 
        
        echo '<a href=indexrestrito.php> Index restrito </a> <br/>';

        ?>