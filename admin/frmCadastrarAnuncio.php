<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Anunciar Moradia</title>
                <meta charset="UTF-8">
                
 </head>
 
 <body> 
<h1>Cadastro de Anúncio</h1>
<form id="form_anuncio" action="anuncio.php" method="post" >
           
               
                <label>Título da postagem</label><br/>
                <input type="text" name="tituloAnuncio" id="tituloAnuncio" />
		<br />
		
                <label>Descrição do anúncio</label><br/>
                <input type="text" name="descricaoAnuncio" id="descricaoAnuncio" />
		<br />
                
                <label>CPF</label><br/>
                <input type="text" name="cpfAnunciante" id="cpfAnunciante" />
		<br />
                
                <label>CEP</label><br/>
                <input type="text" name="cepAnuncio" id="cepAnuncio" />
		<br />
                
                <label>Logradouro do anúncio</label><br/>
                <input type="text" name="logradouroAnuncio" id="logradouroAnuncio" />
		<br />
                
                <label>Bairro do anúncio</label><br/>
                <input type="text" name="bairroAnuncio" id="bairroAnuncio" />
		<br />
                
                <label>Preço</label><br/>
                <input type="int" name="precoAnuncio" id="precoAnuncio" />
                <br />
               
              
		<input type="submit" value="Cadastrar Anúncio" />
	</form>
<br/><br/>


		 <div class="loader" style="display: none;"><img src="images/loader.gif" alt="Carregando" /></div>
                 
</body>
</html>

