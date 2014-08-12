<?php

echo '<meta charset=UTF-8>';
include_once '../conexao/conectaToca.inc';

$nomeLazer= $_POST['nomeLazer'];
$infoLazer = $_POST['informacaoLazer'];
$logradouroLazer = $_POST['logradouroLazer'];
$bairroLazer = $_POST['bairroLazer'];

$query = "INSERT INTO lazer (NOME_LAZER, INFORMACAO_LAZER, LOGRADOURO_LAZER, BAIRRO_LAZER)";
$query.= " VALUES ('$nomeLazer', '$infoLazer', '$logradouroLazer', '$bairroLazer')"; 

if (mysql_query($query)) {
    echo '<script>alert("Lazer cadastrado com sucesso!") </script>';

  echo '<script> 
    location.href="javascript:history.back(1)"
    </script>';

}  else {
        echo '<script> 
    alert("Não foi possível seu cadastro!")
    location.href="javascript:history.back(1)"
    </script>';
    
            
}