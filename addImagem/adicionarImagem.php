<html>
<body>
    <form name="cadastro" action="recebe.php?funcao=gravar" method="post" enctype="multipart/form-data">
        <span>Arquivo:</span>
        <input type="file" name="arquivo" multiple/><br /><br />
        <input type="submit" name="enviar" value="Enviar" />
    </form>
    <br/>
    <hr/>
    <br/>
    <?php
    include "../conexao/conectaToca.inc";
    $result = mysql_query("SELECT * FROM foto");
    while($linha = mysql_fetch_array($result)){
        $id = $linha["COD_FOTO"];
        $foto = $linha["FOTO"];
    ?>
    
    <div>
        <img src="../imagens/<?php echo $foto ?>" width="250" height="200" />
        <a href="editar.php"> Alterar </a>
        <a href="excluir.php"> Excluir </a>
    </div>    
    
    <?php
    }
    ?>
</body>
</html>