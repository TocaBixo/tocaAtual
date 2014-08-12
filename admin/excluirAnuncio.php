<?php

echo '<meta charset=UTF-8>';
include '../conexao/conectaToca.inc';
$codigo_anuncio = $_REQUEST['codigo'];

            $sql = "DELETE FROM anuncio_de_moradia WHERE COD_ANUNCIANTE = '$codigo_anuncio'";
           
             if(mysql_query($sql)){

            echo 'Dado Excluido com Sucesso!';
            
        }
        
        else {
            echo mysql_error() . '<br/>';
        } 
         echo '<br/>';
        echo '<a href=Anuncio.php> Voltar </a> <br/>';
        ?>