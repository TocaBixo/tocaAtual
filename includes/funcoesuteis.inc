<?php

function validaAutenticacao($tipoUser,$link)
{
session_start();
if(!isset($_SESSION['email']) or !isset($_SESSION['senha']))
{
    session_destroy();
    echo '<script>
                alert("Você não efetuou o login!")
                location.href="login_adm.php"
          </script>';
} else{
// Obs: fazer a validação para que o usuário x não entre no ambiente do usuário y
        if($tipoUser === 'ADM'){
           include_once '../conexao/conectaToca.inc';
        }
     if($tipoUser === 'RES'){
           include_once 'conexao/conectaToca.inc';
        }
    
$email = isset($_SESSION['email'])?
$_SESSION['email']:null;
$senha = isset($_SESSION['senha'])?
$_SESSION['senha']:null;
$query = "SELECT * FROM usuario WHERE EMAIL_LOGIN = '$email'";
$acao = mysql_query($query);
$usuarios = mysql_fetch_array($acao);
$emailUsuario = $usuarios['EMAIL_LOGIN'];
$tipoUsuario = $usuarios['TIPO_USUARIO'];
$senhaUsuario = $usuarios['SENHA_LOGIN'];
if($tipoUsuario !== $tipoUser)
 {
    session_destroy();
    echo '<script>
                alert("Acesso negado para o seu tipo de Usuário!")
                location.href="'.$link.'"
          </script>';
  }else if($email !== $emailUsuario) 
  {
      session_destroy();
      echo '<script>
                alert("Acesso negado - email de usuário inválido!")
                location.href="'.$link.'"
          </script>';
  }else if ($senha !== $senhaUsuario)
     {
      session_destroy();
      echo '<script>
                alert("Acesso negado - senha não confere!")
                location.href="'.$link.'"
          </script>';
      }
}
}