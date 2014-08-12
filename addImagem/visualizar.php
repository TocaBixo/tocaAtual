<?php
include_once '../conexao/conectaToca.inc';
$query = "SELECT * FROM imagem";
$result = mysql_query($query);

while($usuarios = mysql_fetch_array($result)){
    echo ".$usuarios.['IMAGEM']";
echo '</tr>';
}