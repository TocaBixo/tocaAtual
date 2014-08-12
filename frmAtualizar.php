<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Incluir Usuario </title>
</head>    
<body>   

    
<?php
echo '<meta charset=UTF-8>';
include 'conexao/conectaToca.inc';

$codigo_usuario = $_REQUEST['codigo'];

$sql = "SELECT * FROM usuario WHERE COD_LOGIN = '$codigo_usuario'";
$result = mysql_query($sql);
$usuarios = mysql_fetch_array($result);

echo '<form action="atualizar.php?codigo='.$usuarios['COD_LOGIN'].'" method="post">'

        ?>
  
    <?php 
    
    ?> 
    <form id="form_toca_atualizar" action="atualizar.php" method="post" >
                <label>Novo Nome:</label><br/>
                <input type="text" name="nome" id="nome" value="<?php echo $usuarios['NOME_USUARIO'] ?>"/>
		<br />
                
               <label>Novo email:</label><br/>
                <input type="text" name="email" id="email" value="<?php echo $usuarios['EMAIL_LOGIN'] ?>"/>
		<br />
                
                <label>Nova senha:</label><br />
		<input type="password" name="senha" id="senha" value="<?php echo $usuarios['SENHA_LOGIN'] ?>"/>
                <br />
                
                <label>Confirme sua nova senha</label><br/>
                <input type="password" name="confsenha" id="confsenha"/>
                <br />
               
                
		<input type="submit" value="Atualizar" />
    </form>
    
</body>    
</html>