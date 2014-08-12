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
     function mostrar(m)
{ 
if (m === 1){
document.getElementById("lazer").style.display="block";
document.getElementById("cadastroLazer").style.display="none";
document.getElementById("listarLazer").style.display="none";
}else {
document.getElementById("cadastroLazer").style.display="block";
document.getElementById("lazer").style.display="none";
document.getElementById("listarLazer").style.display="block";
}
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
validaAutenticacao('ADM','../index.php');
include_once '../conexao/conectaToca.inc';

echo '<div id="anuncio">';

$sql = "SELECT * FROM anuncio_de_moradia";

$result = mysql_query($sql);

echo '<table border=1 class=tabela>';
echo '<caption> Anúncios Cadastrados </caption>';
echo '<tr>';
echo '<th> Título </th>';
echo '<th> Descrição </th>';
echo '<th> CPF </th>';
echo '<th> CEP </th>';
echo '<th> Logradouro </th>';
echo '<th> Bairro </th>';
echo '<th> Preço </th>';

echo '<th colspan=2> Ação </th>';
echo '</tr>';
while($usuarios = mysql_fetch_array($result)){
    echo '<tr>';
    echo '<td>' . $usuarios['TITULO_POSTAGEM'] . '</td>';
    echo '<td>' . $usuarios['DESCRICAO_ANUNCIO'] . '</td>';
    echo '<td>' . $usuarios['CPF_ANUNCIANTE'] . '</td>';
    echo '<td>' . $usuarios['CEP_ANUNCIO'] . '</td>';
    echo '<td>' . $usuarios['LOGRADOURO_ANUNCIO'] . '</td>';
    echo '<td>' . $usuarios['BAIRRO_ANUNCIO'] . '</td>';
    echo '<td>' . $usuarios['PRECO_ANUNCIO'] . '</td>';
    
    
    echo '<td> <a href=../frmAtualizar.php?codigo='.$usuarios['COD_ANUNCIANTE'].'> <img src=../imagens/edit.png width=45 height=35/> </a> </td>';
    echo '<td> <a href=excluirAnuncio.php?codigo='.$usuarios['COD_ANUNCIANTE'].'> <img src=../imagens/delete.png width=45 height=35/> </a> </td>';

    
    echo '</tr>';
}

echo '</table>';


echo '<a href=../logout_toca.php>Efetuar Logout</a><br/>';
echo '<a href=indexadmin.php> Voltar </a><br/>';
echo '<meta charset=UTF-8>';

echo '</div>';

?> 



          </article>    
             
    </body>
</html>
