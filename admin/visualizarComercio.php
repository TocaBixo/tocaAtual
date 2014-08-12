<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Atualizar Comércio </title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>    
<body>   

    
<?php
echo '<meta charset=UTF-8>';
include '../conexao/conectaToca.inc';

$codigo_comercio = $_REQUEST['codigo'];

$sql = "SELECT * FROM comercio WHERE COD_COMERCIO = '$codigo_comercio'";
$result = mysql_query($sql);

echo '<table border=1 class="tabela">';
echo '<tr>';
echo '<th> Logradouro </th>';
echo '<th> Bairro</th>';
echo '<th> Telefone</th>';
echo '<th> Horario</th>';
echo '<th> Estacionamento</th>';
echo '<th> Wifi</th>';
echo '<th> Imagem </th>';

echo '<th colspan=2> Ação </th>';
echo '</tr>';
while($comercios = mysql_fetch_array($result)){
    echo '<tr>';
    echo '<td>' . $comercios['LOGRADOURO_COMERCIO'] . '</td>';
    echo '<td>' . $comercios['BAIRRO_COMERCIO'] . '</td>';
    echo '<td>' . $comercios['TELEFONE_COMERCIO'] . '</td>';
    echo '<td>' . $comercios['HORARIO_COMERCIO'] . '</td>';
    echo '<td>' . $comercios['ESTACIONAMENTO_COMERCIO'].'</td>';
    echo '<td>' . $comercios['WIFI_COMERCIO'] . '</td>';
    echo '<td>' . '<img src=../imagens/' . $comercios['IMAGEM_COMERCIO']. ' alt= "imagem" width="150px" height="100px"/>'. '</td>';

    echo '</tr>';
	}

echo '</table>';


?>

</body>    
</html>