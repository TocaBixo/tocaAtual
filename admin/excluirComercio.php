<?php

echo '<meta charset=UTF-8>';
include '../conexao/conectaToca.inc';
$codigo_comercio = $_REQUEST['codigo'];

            $sql = "DELETE FROM comercio WHERE COD_COMERCIO = '$codigo_comercio'";
           
             if(mysql_query($sql)){

            echo 'Dado Excluido com Sucesso!';
            
        }
        
        else {
            echo mysql_error() . '<br/>';
        } 
         echo '<br/>';
        echo '<a href=Comercio.php> Voltar </a> <br/>';
        ?>