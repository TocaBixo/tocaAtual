<?php

echo '<meta charset=UTF-8>';
include_once 'conexao/conectaToca.inc';

$cpfAnun = $_POST['cpfAnunciante'];
$cepAnun = $_POST['cepAnuncio'];
$precoAnun = $_POST['precoAnuncio'];
$logradouroAnun = $_POST['logradouroAnuncio'];
$bairroAnun = $_POST['bairroAnuncio'];
$tituloAnun = $_POST['tituloAnuncio'];
$descAnun = $_POST['descricaoAnuncio'];

    $query = "INSERT INTO anuncio_de_moradia (CPF_ANUNCIANTE, CEP_ANUNCIO, PRECO_ANUNCIO, LOGRADOURO_ANUNCIO, BAIRRO_ANUNCIO, TITULO_POSTAGEM, DESCRICAO_ANUNCIO)";
$query.= " VALUES ('$cpfAnun', '$cepAnun', '$precoAnun', '$logradouroAnun', '$bairroAnun', '$tituloAnun', '$descAnun')";    


if (mysql_query($query)) {
     echo '<script> 
    location.href="index.php"
    </script>';
   
}  else {
        echo '<script> 
    alert("Não foi possível seu cadastro!")
    location.href="javascript:history.back(1)"
    </script>';
    
            
}