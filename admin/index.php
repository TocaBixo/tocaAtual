<?php 
require '../includes/funcoesuteis.inc';
validaAutenticacao('ADM','javascript:history.back(1)');
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Toca do Bixo</title>
        <link rel="stylesheet" type="text/css" href="style/style.css" />
<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="style/style7.css" />

      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>   
    </head>
	
    <body>	 

         <header>
             
           <div id='topoAbso'>  
             
<div id="logo">
<a href="index.php"><img src="../imagens/logo3.png" width="170px" /></a>
</div>

 </div>                       
		   <nav id="menu-inferior">        
 &nbsp;&nbsp; <a href="index.php"><img src="../imagens/casa.png" width="4%"/> Home </a> &nbsp;&nbsp;
 <a href="../logout_toca.php"> <img src="../imagens/login2.png" width="3%" /> Efetuar Logout </a>
                   </nav>

        </header>


        <div id='simulaTop'> </div>


               <ul class="ca-menu">
                    <li>
                        <a href="Usuario.php">
                            <span class="ca-icon"><img src="../imagens/usuario.png" width="140px"  /></span>
                            <div class="ca-content">
                                
                                <h3 class="ca-sub">Usuário</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        
                        <a href="Comercio.php">
                            <span class="ca-icon"><img src="../imagens/comercio.png" width="140px" /></span>
                            <div class="ca-content">
                                
                                <h3 class="ca-sub">Comércio</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="Anuncio.php">
                            <span class="ca-icon"><img src="../imagens/anuncio.png" width="140px" /></span>
                            <div class="ca-content">
                                
                                <h3 class="ca-sub">Anúncio</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="Lazer.php">
                            <span class="ca-icon"><img src="../imagens/lazer.png" width="140px" /></span>
                            <div class="ca-content">
                                
                                <h3 class="ca-sub">Lazer</h3>
                            </div>
                        </a>
                    </li>
                 					
                </ul>
           
<?php        
      include_once '../log.php';
$mensagem= "Nova visita ADM no site";
salvaLog($mensagem);
     ?>   
    </body>
</html>