<?php

echo '<meta charset=UTF-8>';
include '../conexao/conectaToca.inc';
$codigo_usuario = $_REQUEST['codigo'];
$res = 'RES';
$adm = 'ADM';

$query = "SELECT * FROM usuario WHERE COD_LOGIN = '$codigo_usuario'";
$acao = mysql_query($query);
$usuarios = mysql_fetch_array($acao);
$tipoUsuario = $usuarios['TIPO_USUARIO'];

  if($tipoUsuario === $res){
	$sql = "UPDATE usuario SET TIPO_USUARIO='$adm'";
    $sql.= "WHERE COD_LOGIN = '$codigo_usuario'";
   } 
   else{
    $sql = "UPDATE usuario SET TIPO_USUARIO='$res'";
    $sql.= "WHERE COD_LOGIN = '$codigo_usuario'";
   }


//$sql = "UPDATE usuario SET TIPO_USUARIO='$adm'";
//$sql.= "WHERE COD_LOGIN = '$codigo_usuario'";

if(mysql_query($sql)){
            session_start();
        }
        
        else {
            echo mysql_error() . '<br/>';
        } 

echo '<script language = "JavaScript">
    location.href="Usuario.php"
    </script>';
?>