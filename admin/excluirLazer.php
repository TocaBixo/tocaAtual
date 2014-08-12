<?php

echo '<meta charset=UTF-8>';
include '../conexao/conectaToca.inc';
$codigo_lazer = $_REQUEST['codigo'];

            $sql = "DELETE FROM lazer WHERE COD_LAZER = '$codigo_lazer'";
           
             if(mysql_query($sql)){

            echo 'Dado Excluido com Sucesso!';
            
        }
        
        else {
            echo mysql_error() . '<br/>';
        } 
         echo '<br/>';
        echo '<a href=Lazer.php> Voltar </a> <br/>';
        ?>