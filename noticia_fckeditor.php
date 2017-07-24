<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<div align="center">

  
  <?php
$editor = new FCKeditor("editor_noticia") ;			//instanciamento da classe FCKeditor, o parametro dele será o post do formulario
$editor->BasePath = "util/fckeditor/" ; 		// o patch ou caminho baseda biblioteca
$editor->Value = "<p></p>";//valor que aparecera inicialmente no editor
$editor->Width = "60%";
$editor->height = "600pt";

?>
  
  
<form id="texto_noticia" name="texto_noticia" action="" method="post">  
  <?php 
  $editor->Create() ;// cria a tela do editor
  ?><br/>
  <input type="submit" value="Enviar Dados para o banco" />
</form>

</div>

</body>
</html>