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
    
    		<script type="text/javascript">
     function confirma() {
    var x;
    if (confirm("Tem certeza que deseja excluir este usuário?") === true) {
        x = $link = "excluir.php?codigo='.$usuarios['COD_LOGIN'].'";
   } else {
        x = $link = "#";
    }
    document.getElementById("confirmar").innerHTML = x;
}

        </script>  	

    
    
    </head>
	
    <body>	 

            <header>
             
           <div id='topoAbso'>  
             
<div id="logo">
<a href="index.php"><img src="../imagens/logo3.png" width="170px" /></a>
</div>
                      
		   <nav id="menu-inferior">
              <div id='linksTopo'>         
 &nbsp;&nbsp; <a href="index.php"><img src="../imagens/casa.png" width="4%"/> Home </a> &nbsp;&nbsp;
 <a href="../logout_toca.php"> <img src="../imagens/login2.png" width="3%" /> Efetuar Logout </a>
 
              </div> 
                   </nav>

 </div> 
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
//session_start();
require '../includes/funcoesuteis.inc';
validaAutenticacao('ADM','javascript:history.back(1)');

include_once '../conexao/conectaToca.inc';


$sql = "SELECT * FROM usuario";

$result = mysql_query($sql);
echo '<table border=1 class="tabela">';
echo '<caption> Usuários Cadastrados </caption>';
echo '<tr>';
echo '<th> Nome </th>';
echo '<th> Email </th>';
echo '<th> Tipo </th>';
echo '<th colspan=3> Ação </th>';
echo '</tr>';

while($usuarios = mysql_fetch_array($result)){
    echo '<tr>';
    echo '<td>' . $usuarios['NOME_USUARIO'] . '</td>';
    echo '<td>' . $usuarios['EMAIL_LOGIN'] . '</td>';
    echo '<td>' . $usuarios['TIPO_USUARIO'] . '</td>';
	
	
$tipoDoUsuario = $usuarios['TIPO_USUARIO'];
	$res = "RES";
    
    echo '<td> <a id="link2" href=../frmAtualizar.php?codigo='.$usuarios['COD_LOGIN'].'> <img src=../imagens/edit.png width=45 height=35/> </a> </td>';
    echo '<div id="confirmar"> <td> <a id="link2" href=# onclick="confirma()"> <img src=../imagens/delete.png width=45 height=35/> </a> </td> </div>';
	
  if($tipoDoUsuario === $res){
	echo '<td> <a id="link2" href=tornarAdm.php?codigo='.$usuarios['COD_LOGIN'].'> Tornar ADM </a> </td>';	
   } 
   else{
    echo '<td> <a id="link2" href=tornarAdm.php?codigo='.$usuarios['COD_LOGIN'].'> Tornar RES </a> </td>';	
   }
   
}
    
    echo '</tr>';

echo '</table>';


echo '<a href=../logout_toca.php> Efetuar Logout</a><br/>';
echo '<a href=index.php> Voltar </a><br/>';
echo '<meta charset=UTF-8>'; 

?>
             
    </body>
</html>