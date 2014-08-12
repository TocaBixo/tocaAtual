<?php

echo '<meta charset=UTF-8>';
include_once '../conexao/conectaToca.inc';

$nomeUniversidade= $_POST['nomeUniversidade'];

$query = "INSERT INTO universidade_proxima (NOME_UNIVERSIDADE)";
$query.= " VALUES ('$nomeUniversidade')"; 

if (mysql_query($query)) {
    echo '<script>alert("Universidade cadastrada com sucesso!") </script>';

  echo '<script> 
    location.href="javascript:history.back(1)"
    </script>';

}  else {
        echo '<script> 
    alert("Não foi possível seu cadastro!")
    location.href="javascript:history.back(1)"
    </script>';
    
            
}