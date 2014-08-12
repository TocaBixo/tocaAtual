<?php

echo '<meta charset=UTF-8>';
include_once '../conexao/conectaToca.inc';

	if(isset($_POST['cadastrar'])){
    
$nomeCom = $_POST['nomeComercio'];
$descricaoCom = $_POST['descricaoComercio'];
$logradouro = $_POST['logradouro'];
$bairroCom = $_POST['bairroComercio'];
$telCom = $_POST['telComercio'];
$horarioCom = $_POST['horarioComercio'];
$estacionamento = $_POST['estacionamento'];
$wifi = $_POST['wifi'];
$categoria = $_POST['categoria'];
		
		//INFO IMAGEM
		$foto		= $_FILES['img'];
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
                                            $query = "INSERT INTO comercio (NOME_COMERCIO, DESCRICAO_COMERCIO, LOGRADOURO_COMERCIO, BAIRRO_COMERCIO, TELEFONE_COMERCIO, HORARIO_COMERCIO, ESTACIONAMENTO_COMERCIO, WIFI_COMERCIO, IMAGEM_COMERCIO, CATEGORIA_COD_CATEGORIA)";
$query.= " VALUES ('$nomeCom', '$descricaoCom','$logradouro', '$bairroCom', '$telCom', '$horarioCom', '$estacionamento', '$wifi', '$novoNome', '$categoria')";    
                                }
					else{
						$msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro...";
				
				}
				
				foreach($msg as $pop)
					echo $pop.'<br>';
			}
		}
        }}
 
     
       


if (mysql_query($query)) {
     echo '<script> 
    location.href="Comercio.php"
    </script>';
   
}  else {
        echo '<script> 
    alert("Não foi possível seu cadastro!")
    location.href="javascript:history.back(1)"
    </script>';
    
            
}


