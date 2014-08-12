<?php

echo '<meta charset=UTF-8>';
include '../conexao/conectaToca.inc';
$codigo_comercio = $_REQUEST['codigo'];

$nomeCom = $_POST['nomeComercio'];
$descricaoCom = $_POST['descricaoComercio'];
$logradouro = $_POST['logradouro'];
$bairroCom = $_POST['bairroComercio'];
$telCom = $_POST['telComercio'];
$horarioCom = $_POST['horarioComercio'];
$sql_atl = "SELECT * FROM comercio WHERE COD_COMERCIO='$codigo_comercio'";
$result = mysql_query($sql_atl);
while ($linha = mysql_fetch_array($result)){
$fotoAnt = $linha['IMAGEM_COMERCIO'];
}	
//INFO IMAGEM
		if($_FILES['pq']['name'] == false){

	    $sql = "UPDATE comercio SET NOME_COMERCIO='$nomeCom', DESCRICAO_COMERCIO='$descricaoCom', LOGRADOURO_COMERCIO='$logradouro', BAIRRO_COMERCIO='$bairroCom', TELEFONE_COMERCIO='$telCom', HORARIO_COMERCIO='$horarioCom'";  
            $sql.= "WHERE COD_COMERCIO = '$codigo_comercio'"; 

}else {
                $foto		= $_FILES[$img];
		$numFile	= count(array_filter($foto['name']));
		
		//REQUISITOS
		$permite 	= array("image/pjpeg", "image/jpeg", "image/pjpeg", "image/jpeg", "image/gif", "image/png");
		
		//MENSAGENS
		$msg		= array();
		$errorMsg	= array(
			1 => 'O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini.',
			2 => 'O arquivo ultrapassa o limite de tamanho em MAX_FILE_SIZE que foi especificado no formulário HTML',
			3 => 'o upload do arquivo foi feito parcialmente',
			4 => 'Não foi feito o upload do arquivo'
		);
		
		if($numFile <= 0)
			echo 'Selecione uma Imagem!';
		else{
			for($i = 0; $i < $numFile; $i++){
				$name 	= $foto['name'][$i];
				$type	= $foto['type'][$i];
				$size	= $foto['size'][$i];
				$error	= $foto['error'][$i];
				$tmp	= $foto['tmp_name'][$i];
				
				$extensao = @end(explode('.', $name));
				$novoNome = rand().".$extensao";
				
				if($error != 0)
					$msg[] = "<b>$name :</b> ".$errorMsg[$error];
				else if(!in_array($type, $permite))
					$msg[] = "<b>$name :</b> Erro imagem não suportada!";
				else{
					
					if(move_uploaded_file($tmp, '../imagens/'.$novoNome)){
                                        $msg[] = "<b>$name :</b> Upload Realizado com Sucesso!";
                                                      $sql = "UPDATE comercio SET NOME_COMERCIO='$nomeCom', DESCRICAO_COMERCIO='$descricaoCom', LOGRADOURO_COMERCIO='$logradouro', BAIRRO_COMERCIO='$bairroCom', TELEFONE_COMERCIO='$telCom', HORARIO_COMERCIO='$horarioCom', IMAGEM_COMERCIO='$novoNome'";  
            $sql.= "WHERE COD_COMERCIO = '$codigo_comercio'"; 
                                }
					else{
						$msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro...";
				
				}
				
 
         
           //echo $sql;

        
        if(mysql_query($sql)){
            echo 'Dados Atualizados com sucesso!';
                    
        echo "<label> Dados Atualizados: <br/> <br/><label>";
        echo $nomeCom . "<br/>";
        echo $descricaoCom . "<br/>";
        echo $logradouro . "<br/>";
        echo $bairroCom . "<br/>";
        echo $telCom . "<br/>";
        echo $horarioCom . "<br/>";
        }
        
        else {
            echo mysql_error() . '<br/>';
} }}}}
        
        echo '<a href=admin/index.php> Index ADM </a> <br/>';
        echo '<a href=Comercio.php> Listar Comercio </a>';
        ?>