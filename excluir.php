<?php

echo '<meta charset=UTF-8>';
include 'conexao/conectaToca.inc';
$codigo_usuario = $_REQUEST['codigo'];

            $sql = "DELETE FROM usuarios WHERE COD_USUARIO = '$codigo_usuario'";
           
             if(mysql_query($sql)){
            echo 'Dado Excluido com Sucesso!';
            
        }
        
        else {
            echo mysql_error() . '<br/>';
        } 
         echo '<br/>';
        echo '<a href=index.php> Home - Page </a> <br/>';
        echo '<a href=listarUsuario.php> Listar Usuario </a>'
        ?>
