<!DOCTYPE html>


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
document.getElementById("categoria").style.display="block";
document.getElementById("cadastroCategoria").style.display="none";
document.getElementById("listarCategoria").style.display="none";
}else {
document.getElementById("cadastroCategoria").style.display="block";
document.getElementById("categoria").style.display="none";
document.getElementById("listarCategoria").style.display="block";
}
}

        </script>  	
   
    </head>
	
    	 
   <header>
             
           <div id='topoAbso'>  
             
<div id="logo">
<a href="index.php"><img src="../imagens/logo3.png" width="170px" /></a>
</div>
                      
		   <nav id="menu-inferior">      
 &nbsp;&nbsp; <a href="index.php"><img src="../imagens/casa.png" width="30"/> Home </a> &nbsp;&nbsp;
 <a href="../logout_toca.php"> <img src="../imagens/login.png" width="30" /> Efetuar Logout </a>
 
              </div> 
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
                        
                        <a href="Categoria.php">
                            <span class="ca-icon"><img src="../imagens/categoria.png" width="140px" /></span>
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

echo '<div id="categoria">';

$sql = "SELECT * FROM categoria";

$result = mysql_query($sql);

echo '<table class="tabela">';
echo '<tr>';
echo '<th> Código </th>';
echo '<th> Nome </th>';
echo '<th colspan=2> Ação </th>';
echo '</tr>';
while($categorias = mysql_fetch_array($result)){
    echo '<tr>';
    echo '<td>' . $categorias['COD_CATEGORIA'] . '</td>';
    echo '<td>' . $categorias['NOME_CATEGORIA'] . '</td>';
    echo '<td> <a id="link2" href=excluirCategoria.php?codigo='.$categorias['COD_CATEGORIA'].'> <img src=../imagens/delete.png width=45 height=37/> </a> </td>';
    echo '</tr>';
	}

echo '</table>';


echo '<a href=javascript:history.back(1)> Voltar </a><br/>';
echo '<a href="#" onclick="mostrar(2)"> Cadastrar Categoria </a><br/>';

echo '</div>';

?> 
	
<div id="cadastroCategoria">
    
    <form id="form_anuncio" action="novaCategoria.php" method="post" >
           
               
                <label> Nome da categoria </label><br/>
                <input type="text" name="nomeCategoria" id="categoria" />
		<br />
		<input type="submit" value="Cadastrar Categoria" />
	</form>

</div>

<a href="#" onclick="mostrar(1)" id="listarCategoria"> Listar Categoria </a>



    </body>
</html>

