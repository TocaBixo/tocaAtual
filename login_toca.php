<?php
include_once 'conexao/conectaToca.inc';
session_start();
if(isset($_POST['email']) and isset ($_POST['senha']))
{
$email = $_POST['email'];
$senha = $_POST['senha'];
$query = "SELECT * FROM usuario WHERE EMAIL_LOGIN = '$email'";
$result = mysql_query($query);
$totalUsuario = mysql_num_rows($result);
//echo $totalUsuario . '<br/>';
if ($totalUsuario === 0){
     echo '<script> 
    alert("Usuario não encontrado!")
    location.href="javascript:history.back(1)"
    </script>';
           
}else{
    $array = mysql_fetch_array($result);
    $senhaUsuario = $array['SENHA_LOGIN'];
    $tipoUsuario = $array['TIPO_USUARIO'];
        if ($senha !== $senhaUsuario)
        {
             echo '<script> 
    alert("Senha Não Confere")
    location.href="javascript:history.back(1)"
    </script>';
           
        }  else {
             // Aqui está tudo certo tanto o email quanto a senha
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['nomeUsuario'] = $array['NOME_USUARIO'];
            $_SESSION['codigo'] = $array['COD_LOGIN'];
            mysql_close();
            
            if ($tipoUsuario === 'RES')
            {
                echo '<script language = "JavaScript">
                location.href="indexrestrito.php?codigo='.$tipoUsuario.'";
                </script>';

            }else if ($tipoUsuario === 'ADM'){
               echo '<script language = "JavaScript">
                      location.href="admin/index.php?codigo='.$tipoUsuario.'";
                  </script>';
            
        }else {
            session_destroy();
            echo '<script> 
    alert("Tipo de Usuario inexistente!")
    location.href="javascript:history.back(1)"
    </script>';
           
        }
}
}
}else {
    '<script language = "JavaScript">
    location.href="javascript:history.back(1)"
    </script>';
}