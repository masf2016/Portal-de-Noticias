<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>
<body>


<div align="center">
<table width="59%" border="1" bordercolor="#000000" >
  <tr>
    <th colspan="2" scope="col">Portal de Noticias</th>
    </tr>
  <tr>
    <td width="25%">
      categoria<br />
      <a href="index.php?tabela=noticia&acao=listar">administração</a><br />
      <a href="index.php?tabela=administracao&acao=listar">users</a>
    </td>
    <td width="75%">
    <?php
	require('util/conecta.php');
	$tabela = $_REQUEST['tabela'];
	
	$acao   = $_REQUEST['acao'];
	
	echo "tabela = $tabela e acao = $acao ";
	switch ($tabela)
	{
		case "noticia":
		{
			require('noticia_acao.php');
			break;
		}
		case "administracao":
		{
			require('administracao_acao.php');
			break;
		}
		case "":
		{
			echo "<img src='imagem/noticia.gif' />"; // puxa o arquivo de imagem caso não tenha nada na tela
			break;
			
		}
	}
	for($i = 0; $i < 5; $i++)
			echo $oquefazer->registros->texto_noticia."\n";
   			
  /* if($tabela == "noticia")
    require('noticia_acao.php');
	else
	
	echo "<img src='imagem/noticia.gif' />"; // puxa o arquivo de imagem caso não tenha nada na tela
	
	 if($tabela == "administracao")
    require('administracao_acao.php');
	*/
	?>
    
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">Noticias News</td>
    </tr>
</table>
</div>

</body>
</html>