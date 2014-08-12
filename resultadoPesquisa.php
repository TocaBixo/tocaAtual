<?php
//session_start();
include_once 'conexao/conectaToca.inc';


echo '<h2>Ambiente Administrativo</h2>';
$palavra = $_POST['palavra'];

$sql = "SELECT * FROM usuario WHERE NOME_USUARIO LIKE '%".$palavra."%'";
$result = mysql_query($sql);

echo '<table border=1>';
echo '<caption> Usuários Cadastrados </caption>';
echo '<tr>';
echo '<th> Nome </th>';
echo '<th> Email </th>';

while($usuarios = mysql_fetch_array($result)){
    echo '<tr>';
    echo '<td>' . $usuarios['NOME_USUARIO'] . '</td>';
    echo '<td>' . $usuarios['EMAIL_LOGIN'] . '</td>'; 
}
    
    echo '</tr>';

echo '</table>';

echo '<meta charset=UTF-8>';