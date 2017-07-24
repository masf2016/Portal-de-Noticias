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
<?php echo "<br/>inicio adminis_lista";?>
<table width="1076" height="164" border="1">
  <tr>
    <td colspan="7" align="center"><p>Administração do Site</p>
      <form id="pesquisa" name="form_pesquisa" method="post" action="index.php?tabela=administracao&acao=listar">
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
    <td width="156"><a href="index.php?tabela=administracao&acao=listar&ordem=nome_usuario">Nome</a></td>
    <td width="141"><a href="index.php?tabela=administracao&acao=listar&ordem=login_usuario">Login</a></td>
    <td width="144"><a href="index.php?tabela=administracao&acao=listar&ordem=senha_usuario">senha</a></td>
    <td width="162"><a href="index.php?tabela=administracao&acao=listar&ordem=nivel_acesso">Nivel de acesso</a></td>
    <td colspan="2"><a href="index.php?tabela=administracao&acao=inserir">Novo Registro</a></td>
  </tr>
  <?php
 
  
 //   require('../util/conecta.php');
	
	
	while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
	{
	   // echo "cidade = " . $resultado->Fields('CID_DESCRICAO')."<br>";	
	
  ?>
  
  <tr>
    <td><?php echo $oquefazer->registros->nome_usuario; ?></td>
    <td><?php echo $oquefazer->registros->login_usuario; ?></td>
    <td><?php echo $oquefazer->registros->senha_usuario; ?></td>
    <td><?php echo $oquefazer->registros->nivel_acesso; ?></td>
    <td width="174"><a href="index.php?tabela=administracao&acao=alterar&codigo=<?php echo $oquefazer->registros->cod_usuario; ?>">Alterar</a></td>
    <td width="259"><a href="javascript:if(confirm('Deseja excluir esse registro?')){location='index.php?tabela=administracao&acao=excluir&codigo=<?php echo $oquefazer->registros->cod_usuario; ?>';}">Excluir</a></td>
  </tr>
  <?php
  
	
	}
	
	?>
  
  <tr>
    <td colspan="7">extramicro@hotmail.com<br />
      Edilson Silva</td>
  </tr>
</table>
<?php echo "<br/>fim adminis_lista";?>
</body>
</html>