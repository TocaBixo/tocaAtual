<?php
include 'conexao/conectaToca.inc';
function salvaLog($mensagem) {
$ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
$hora = date('Y/d/m H:i:s');// Salva a data e hora atual (formato MySQL)
// Usamos o mysql_escape_string() para poder inserir a mensagem no banco
//   sem ter problemas com aspas e outros caracteres
$mensagem = mysql_escape_string($mensagem);
// Monta a query para inserir o log no sistema
$sql = "INSERT INTO log (IP_LOG, HORA_LOG, MENSAGEM)";
$sql.= "VALUES ('$ip', '$hora', '$mensagem')";
if (mysql_query($sql)) {
return true;
} else {
return false;
}
}
?>
