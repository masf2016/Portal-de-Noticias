<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
<style type="text/css">
@import url("estilo.css");
</style>  
</head>

<body>
<table width="1706" height="164" border="1">
  <tr>
    <td colspan="8" align="center"><p>Listagem das Noticias do Site</p>
      <form id="pesquisa" name="form_pesquisa" method="post" action="index.php?tabela=noticia&acao=listar">
        Pesquisa: 
        <label>
          <input type="text" name="pesquisa" id="pesquisa" />
        </label>
        <label>
          <input type="submit" name="button" id="button" value="Pesquisar" />
        </label>
      </form>
         <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="184"><a href="index.php?tabela=noticia&acao=listar&ordem=titulo_noticia">Título</a></td>
    <td width="214"><a href="index.php?tabela=noticia&acao=listar&ordem=subtitulo_noticia">Subtitulo</a></td>
    <td width="214"><a href="index.php?tabela=noticia&acao=listar&ordem=nome_autor">Autor</a></td>
    <td width="214"><a href="index.php?tabela=noticia&acao=listar&ordem=data_noticia">Data</a></td>
    <td width="214"><a href="index.php?tabela=noticia&acao=listar&ordem=texto_noticia">Conteúdo</a></td>
    <td width="214"><a href="index.php?tabela=noticia&acao=listar&ordem=categoria">Categoria</a></td>
    <td colspan="2"><a href="index.php?tabela=noticia&acao=inserir">Novo Registro</a></td>
  </tr>
  <?php
 
  
 //   require('../util/conecta.php');
	
	
	while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
	{
	    	
	
  ?>
  
  <tr>
    <td><?php echo $oquefazer->registros->titulo_noticia; ?></td>
    <td><?php echo $oquefazer->registros->subtitulo_noticia; ?></td>
    <td><?php echo $oquefazer->registros->nome_autor; ?></td>
    <td><?php echo $oquefazer->registros->data_noticia; ?></td>
    <td><?php echo $oquefazer->registros->texto_noticia; ?></td>
    <td><?php echo $oquefazer->registros->categoria; ?></td>
    <td width="202"><a href="index.php?tabela=noticia&acao=alterar&codigo=<?php echo $oquefazer->registros->cod_noticia; ?>">Alterar</a></td>
    <td width="198"><a href="javascript:if(confirm('Deseja excluir esse registro?')){location='index.php?tabela=noticia&acao=excluir&codigo=<?php echo $oquefazer->registros->cod_noticia; ?>';}">Excluir</a></td>
  </tr>
  <?php
  
	
	}
	
	?>
  
  <tr>
    <td colspan="8">extramicro@hotmail.com<br />
      Edilson Silva</td>
  </tr>
</table>
</body>
</html>