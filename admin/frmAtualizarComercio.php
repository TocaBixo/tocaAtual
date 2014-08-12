<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Atualizar Comércio </title>
</head>    
<body>   

    
<?php
echo '<meta charset=UTF-8>';
include '../conexao/conectaToca.inc';

$codigo_comercio = $_REQUEST['codigo'];

$sql = "SELECT * FROM comercio WHERE COD_COMERCIO = '$codigo_comercio'";
$result = mysql_query($sql);
$comercios = mysql_fetch_array($result);
     ?>

       <h1> Cadastro de Comercio </h1>
<form id="form_comercio" action="atualizarComercio.php?codigo=<?php echo $comercios['COD_COMERCIO'] ?>" method="post">
  <center>         
    <table class="form">
      <tr>
             <td id="label">Digite o Nome do Comercio</td>
             <td><input type="text" name="nomeComercio" id="nomeComercio" onkeypress="return SomenteLetra(event);" value="<?php echo $comercios['NOME_COMERCIO'] ?>"/></td>
             </tr>
            
             <tr>
             <td id="label">Descrição do Comercio</td>
             <td> <textarea name="descricaoComercio" id="descricaoComercio" value="<?php echo $comercios['DESCRICAO_COMERCIO'] ?>"></textarea></td>
             </tr>
             
             <tr>
             <td id="label">Logradouro do Comercio</td>
             <td><input type="text" name="logradouro" id="logradouro" value="<?php echo $comercios['LOGRADOURO_COMERCIO'] ?>"/></td>
             </tr>
             
             <tr>
             <td id="label">Bairro do Comercio</td>
             <td><input type="text" name="bairroComercio" id="bairroComercio" value="<?php echo $comercios['BAIRRO_COMERCIO'] ?>"/></td>
             </tr>
             
             <tr>
             <td id="label">Telefone do Comercio</td>
             <td><input type="text" name="telComercio" id="telComercio" onkeypress="return SomenteNumero(event); return mascara(this,'##-####-####')" maxlength="12" value="<?php echo $comercios['TELEFONE_COMERCIO'] ?>"/></td>
             </tr>
             
              <tr>
             <td id="label">Horário de Funcionamento</td>
             <td><input type="text" name="horarioComercio" id="horarioComercio" value="<?php echo $comercios['HORARIO_COMERCIO'] ?>"/></td>
             </tr>
             
             <tr>
              <td id="label"> Arquivo:
                  	<input type="file" name="pq" multiple> <br /><br /> </td>
             </tr>

             <tr>
             <td></td>
             <td><input type="submit" name="atualizar" value="Atualizar Comercio" /></td>
             </tr>
             
             
             </table>		
	</center>
	</form>

    
</body>    
</html>