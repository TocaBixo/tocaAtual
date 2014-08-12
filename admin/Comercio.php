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
document.getElementById("comercio").style.display="block";
document.getElementById("cadastroComercio").style.display="none";
document.getElementById("listarComercio").style.display="none";
}else {
document.getElementById("cadastroComercio").style.display="block";
document.getElementById("comercio").style.display="none";
document.getElementById("listarComercio").style.display="block";
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

echo '<div id="comercio">';

$sql = "SELECT * FROM comercio";

$result = mysql_query($sql);

echo '<table class="tabela">';
echo '<tr>';
echo '<th> Comercio </th>';
echo '<th> Descrição </th>';
echo '<th> Vizualizar </th>';

echo '<th colspan=2> Ação </th>';
echo '</tr>';
while($comercios = mysql_fetch_array($result)){
    echo '<tr>';
    echo '<td>' . $comercios['NOME_COMERCIO'] . '</td>';
    echo '<td>' . $comercios['DESCRICAO_COMERCIO'] . '</td>';
    echo '<td> <a href=visualizarComercio.php?codigo='.$comercios['COD_COMERCIO'].'> <img src=../imagens/pesquisa.png width=35 height=25 /> </a> </td>';
    
  echo '<td> <a id="link2" href=frmAtualizarComercio.php?codigo='.$comercios['COD_COMERCIO'].'> <img src=../imagens/edit.png width=45 height=37/> </a> </td>';
    echo '<td> <a id="link2" href=excluirComercio.php?codigo='.$comercios['COD_COMERCIO'].'> <img src=../imagens/delete.png width=45 height=37/> </a> </td>';

    
    echo '</tr>';
	}

echo '</table>';


echo '<a href=javascript:history.back(1)> Voltar </a><br/>';
echo '<a href="#" onclick="mostrar(2)"> Cadastrar Comercio </a><br/>';

echo '</div>';

?> 
	
<div id="cadastroComercio">
   
  <h1> Cadastro de Comercio </h1>
<form id="form_comercio" action="novoComercio.php" method="post" enctype="multipart/form-data">
  <center>         
    <table class="form">
      <tr>
             <td id="label">Digite o Nome do Comercio</td>
             <td><input type="text" name="nomeComercio" id="nomeComercio" onkeypress="return SomenteLetra(event);" /></td>
             </tr>
            
             <tr>
             <td id="label">Descrição do Comercio</td>
             <td> <textarea name="descricaoComercio" id="descricaoComercio"> </textarea> </td>
             </tr>
             
             <tr>
             <td id="label">Logradouro do Comercio</td>
             <td><input type="text" name="logradouro" id="logradouro" /></td>
             </tr>
             
   
             <td id="label">Bairro do Comercio</td>
             <td><input type="text" name="bairroComercio" id="bairroComercio" /></td>
             </tr>
             
             <tr>
             <td id="label">Telefone do Comercio</td>
             <td><input type="text" name="telComercio" id="telComercio" onkeypress="return SomenteNumero(event); return mascara(this,'##-####-####')" maxlength="12"/></td>
             </tr>
             
              <tr>
             <td id="label">Horário de Funcionamento</td>
             <td><input type="text" name="horarioComercio" id="horarioComercio" /></td>
             </tr>
             
             
             
             <tr>
             <td id="label">O comercio possui estacionamento?</td>
             <td><select name="estacionamento">
                  <option value="SIM"> Sim </option>
                  <option value="NÃO"> Não </option>
                </select></td>
             </tr>

             <tr>
             <td id="label">O comercio possui Wifi?</td>
             <td><select name="wifi">
                   <option value="SIM"> Sim </option>
                   <option value="NÃO"> Não </option>
                </select></td>
             </tr>
             
              <tr>
             <td id="label">Categoria</td>
             <td><select name="categoria">
                <?php
                     
                     $sql = "SELECT * FROM categoria";

$result = mysql_query($sql);
while($comercios = mysql_fetch_array($result)){
    
   echo $nomeCategoria = $comercios['NOME_CATEGORIA'];
    echo '<option name=categoria>' .$nomeCategoria. '</option>';
}
                     ?>  </option>
                   
                </select></td>
             </tr>
             
             
             
              <tr>
              <td id="label"> <span>Arquivo:</span>
                  	<input type="file" name="img[]" multiple> <br /><br /> </td>
             </tr>
             
             
             <tr>
             <td></td>
             <td><input type="submit" name="cadastrar" value="Cadastrar Comercio" /></td>
             </tr>
             
             
             </table>		
	</center>
	</form>

</div>

<a href="#" onclick="mostrar(1)" id="listarComercio"> Listar Comercio </a>
    </body>
</html>
