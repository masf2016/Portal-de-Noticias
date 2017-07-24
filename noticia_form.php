<?php 
include '/util/fckeditor/fckeditor.php';  //chamada do fckeditor
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--
<script type="text/javascript" src="util/fckeditor/fckeditor.js"> </script>
 -->
<title>Untitled Document</title>
</head>

<body>
<?php
$texto = $oquefazer->registros->texto_noticia;

$editor = new FCKeditor('texto_noticia') ;			//instanciamento da classe FCKeditor, o parametro dele será o post do formulario
$editor->BasePath = 'util/fckeditor/' ; 		// o patch ou caminho baseda biblioteca
$editor->Value = "<b>^</b> Clique aqui para expandir <br/> $texto" ;//valor que aparecera inicialmente no editor
$editor->Width = '100%';
$editor->height = '100';

?>
<form id="form1" name="form_cadastro" method="post" action="index.php">
  <div>
    <table width="1063" border="1" cellspacing="5" cellpadding="5">
      <tr>
        <td colspan="3"><div align="center">
          <h1>Painel de Edição de Notícias</h1>
          
        </div></td>
      </tr>
      <tr>
        <td width="100">Titulo</td>
        <td width="242"><input name="titulo_noticia" type="text" id="titulo_noticia" size="40" 
          value="<?php echo $oquefazer->registros->titulo_noticia;?>" /></td>
        <td width="663" rowspan="6">
        <?php
       $editor->Create() ;// cria a tela do editor
        ?>
        </td>
      </tr>
      <tr>
        <td>Subtitulo</td>
        <td><input name="subtitulo_noticia" type="text" id="subtitulo_noticia" size="40" 
          value="<?php echo $oquefazer->registros->subtitulo_noticia;?>" /></td>
      </tr>
      <tr>
        <td>Autor</td>
        <td><input name="nome_autor" type="text" id="nome_autor" size="40" 
          value="<?php echo $oquefazer->registros->nome_autor;?>" /></td>
      </tr>
      <tr>
        <td>Data</td>
        <td><input name="data_noticia" type="text" id="data_noticia" size="40" 
          value="<?php echo $oquefazer->registros->data_noticia;?>" /></td>
      </tr>
      <tr>
        <td>Categoria</td>
        <td><select name="categoria" id="categoria">
          <?php
		       $categoria1 = '';
		       $categoria2 = '';
		       $categoria3 = '';
			   $categoria4 = '';
			   $categoria5 = '';
		     
			   switch($oquefazer->registros->categoria)
			   {
				   case 'Todas': $categoria1 = 'selected';break; 
				   case 'Ciencia e Tecnologia': $categoria2 = 'selected';break;
				   case 'Politica': $categoria3 = 'selected';break; 
				   case 'Humor': $categoria4 = 'selected';break; 
				   case 'Televisao': $categoria5 = 'selected';break;
							   
			   }
		  ?>
          <option value="Todas" <?php echo $categoria1;?>>Todas</option>
          <option value="Ciencia e Tecnologia" <?php echo $categoria2;?>>Ciencia e Tecnologia</option>
          <option value="Politica" <?php echo $categoria3;?>>Politica</option>
          <option value="Humor" <?php echo $categoria4;?>>Humor</option>
          <option value="Televisao" <?php echo $categoria5;?>>Televisao</option>
        </select></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" align="center"><label>
          <input type="submit" name="button" id="button" value="Salvar" />
          <input type="reset" name="button2" id="button2" value="Limpar" />
          <input type="button" name="button3" id="button3" value="Cancelar" />
        </label>
        <input type="hidden" name="tabela" value="noticia" />
        <input type="hidden" name="acao" value="<?php echo 'gravar_'.$acao ?>"/>        
        <input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->cod_noticia;?>" />                
        </td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>