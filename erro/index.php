<?php
$site		= $_SERVER['HTTP_HOST'];
$erro 		= (int)$_SERVER['QUERY_STRING'];
$url 		= $_SERVER['HTTP_REFERER'];
$uri 		= $_SERVER['REQUEST_URI'];
$data 		= date("d/m/Y H:i:s");
$ip 		= $_SERVER["REMOTE_ADDR"];
$pagina 	= "http://".$site."/erro/".$erro.".shtml";
$assunto	= "Erro ".$erro." - ".$site;
$msgErro	= "[".$data."] IP: ".$ip." - ERRO ".$erro." - LINK: ".$uri." - REFER�NCIA: ".$url;

if(isset($erro)){
	if(file_exists($erro.".shtml")){
		mail($assunto,$msgErro); 	// envia um e-mail
	
		$fp = fopen("erro.txt", "a"); 		// grava em arquivo de log
			  fputs ($fp, "$msgErro\r\n");
			  fclose($fp);
		
		header ("Location: $pagina"); 		// redireciona o visitate
	}
}
?>