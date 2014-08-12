<?php

echo '<meta charset=UTF-8>';
include_once '../conexao/conectaToca.inc';

$nomeCampus= $_POST['nomeCampus'];

$query = "INSERT INTO campus (NOME_CAMPUS)";
$query.= " VALUES ('$nomeCategoria')"; 

if (mysql_query($query)) {
    echo '<script>alert("Campus cadastrada com sucesso!") </script>';

  echo '<script> 
    location.href="javascript:history.back(1)"
    </script>';

}  else {
        echo '<script> 
    alert("Não foi possível seu cadastro!")
    location.href="javascript:history.back(1)"
    </script>';
    
            
}