<?php

echo '<meta charset=UTF-8>';
include_once '../conexao/conectaToca.inc';
include 'style/style.css';

$nomeCategoria= $_POST['nomeCategoria'];

$query = "INSERT INTO categoria (NOME_CATEGORIA)";
$query.= " VALUES ('$nomeCategoria')"; 

if (mysql_query($query)) {
    echo '<div id="info"> Categoria cadastrada com sucesso </div>';

  echo '<script> 
    location.href="javascript:history.back(1)"
    </script>';

}  else {
        echo '<script> 
    alert("Não foi possível seu cadastro!")
    location.href="javascript:history.back(1)"
    </script>';
    
            
}