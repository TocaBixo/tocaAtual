<!DOCTYPE html>

<html>
    <head>
        <title>Toca do Bixo</title>
        <link rel="stylesheet" type="text/css" href="style/style.css" />
<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
<script type="text/javascript" src="js/banner.js"></script>
    </head>
	
    <body>	 

         <header>
		
         <div id="pesquisa">
		<form name="frmBusca" action="resultadoPesquisa.php" method="POST">
		<img id="imagem-pesquisa" src="imagens/pesquisa.png"  width="5%" height="8%" />
		<input type="text" name="palavra" rows="2">
		<input type="submit"id="botaopesquisa">
		</form>
		</div>
		

					
            <div id="logo">
			<a href="index.php"><img src="imagens/logo2.png" width="267px" height="165px" /></a>
			</div>	

		   <nav id="menu-inferior">
  <a href="index.php"><img src="imagens/casa.png" width="4.5%" height="7.5%" /> Home </a> &nbsp;&nbsp;
  <a href="faleconosco.html"><img src="imagens/faleconosco.png" width="5%" height="8%" /> Fale conosco</a> &nbsp;&nbsp;
  <a href="anuncieaqui.html"><img src="imagens/anuncio.png" width="4%" height="7%" /> Anuncie Aqui </a> 

<?php 
session_start();
$nomeUsuario = isset($_SESSION['nomeUsuario'])?$_SESSION['nomeUsuario']:null;
$codigo_usuario = $_REQUEST['codigo'];
$res = 'RES';
if($codigo_usuario === $res){
echo '&nbsp; &nbsp; Olá '; echo $nomeUsuario;
} else {
echo '<script language = "JavaScript">
                alert("Acesso negado para o seu tipo de usuário!")
                location.href="javascript:history.back(1)";
                </script>';
}
?>
		   
           </nav>
		
        </header>
		 
		  <section>
		 		
<div id="banner" class="banner">
 
	<div id="banner_img">
    
   	  <img src="banner_img/1.jpg" width="100%" height="444px" border="0" alt="Banner">
        
    </div>
    
    <div id="botoes">
    
    		<a href="javascript:void(0);" id="banner_img_1" class="hover" onclick="mudaImg('0');">1</a>
        	<a href="javascript:void(0);" id="banner_img_2" onclick="mudaImg('1');">2</a>
			<a href="javascript:void(0);" id="banner_img_3" onclick="mudaImg('2');">3</a>
        	<a href="javascript:void(0);" id="banner_img_4" onclick="mudaImg('3');">4</a>
    
    </div>
 
</div>

		 </section>
		 
		 
         <nav id="menu-index">
            <br />
		<div id="casa">
	        <a href="usp.php"><img src="imagens/usp.png" width="10%" height="30%" alt="USP"/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="usp.php"><img src="imagens/unicamp.png" width="10%" height="30%" alt="Unicamp"/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="unesp.php"><img src="imagens/unesp.png" width="10%" height="30%" alt="Unesp"/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="unifesp.php"><img src="imagens/unifesp.png" width="10%" height="30%" alt="Unifesp"/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="puc.php"><img src="imagens/puc.png" width="10%" height="30%" alt="PUC"/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="mackenzie.php"><img src="imagens/mackenzie.png" width="10%" height="30%" alt="Mackenzie"/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         </nav>	       
      
         
        <article>
		<center>
                <br /> <br /> <br /> <br />
<?php
include_once 'conexao/conectaToca.inc';
$codigo_usuario = isset($_SESSION['codigo'])?$_SESSION['codigo']:null;
$sql = "SELECT * FROM usuario WHERE COD_LOGIN = '$codigo_usuario'";
$result = mysql_query($sql);
$usuarios = mysql_fetch_array($result);
echo '<a href=frmAtualizarRestrito.php?codigo='.$usuarios['COD_LOGIN'].'> Alterar Perfil </a> <br/>';
echo '<a href=logout_toca.php>Efetuar Logout</a><br/>';
include_once 'log.php';
$mensagem= "Nova visita RES no site";
salvaLog($mensagem);

?>		
</center>
		</article>
		
		<footer>
		<center>Copyright</center>
		</footer>
       
    </body>
</html>