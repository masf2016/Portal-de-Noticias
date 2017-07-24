<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form_cadastro" method="post" action="index.php">
  <div align="center">
    <table width="500" border="1" cellspacing="5" cellpadding="5">
      <tr>
        <td colspan="2"><div align="center">
          <h1>Edição de Usuarios</h1>
          
        </div></td>
      </tr>
      <tr>
        <td width="99">Nome</td>
        <td width="360"><label>
          <input name="nome_usuario" type="text" id="nome_usuario" size="60" 
          value="<?php echo $oquefazer->registros->nome_usuario;?>" />
        </label></td>
      </tr>
      <tr>
        <td>Subtitulo</td>
        <td>
        <label>
          <input name="login_usuario" type="text" id="login_usuario" size="60" 
          value="<?php echo $oquefazer->registros->login_usuario;?>" />
        </label>
        </td>
      </tr>
      <tr>
        <td>Autor</td>
        <td>
        <label>
          <input name="senha_usuario" type="text" id="senha_usuario" size="60" 
          value="<?php echo $oquefazer->registros->senha_usuario;?>" />
        </label>
        </td>
      </tr>
      <tr>
        <td>Data</td>
        <td>
        <label>
          <input name="nivel_acesso" type="text" id="nivel_acesso" size="60" 
          value="<?php echo $oquefazer->registros->nivel_acesso;?>" />
        </label>
        </td>
      </tr>
      
      <tr>
        <td>Categoria</td>
        <td><label>
          <select name="nivel_acesso" id="nivel_acesso">
      
      <?php
		       $nivel_acesso1 = '';
		       $nivel_acesso2 = '';
		       		     
			   if(($oquefazer->registros->categoria) == 'administrador')
			   {
				    $nivel_acesso1 = 'selected';
					break; 
			   }
					elseif($oquefazer->registros->categoria) == 'usuário')
					{
				    $nivel_acesso2 = 'selected';
					break;
					}
		  ?>
      		<option value="administrador" <?php echo $nivel_acesso1;?>>administrador</option>
            <option value="usuário" <?php echo $nivel_acesso2;?>>usuário</option>
            
            </select>
        </label></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><label>
          <input type="submit" name="button" id="button" value="Salvar" />
          <input type="reset" name="button2" id="button2" value="Limpar" />
          <input type="button" name="button3" id="button3" value="Cancelar" />
        </label>
        <input type="hidden" name="tabela" value="administracao" />
        <input type="hidden" name="acao" value="<?php echo 'gravar_'.$acao ?>"/>        
        <input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->cod_usuario;?>" />                
        </td>
      </tr>
      <tr>
        <td colspan="2"><?php echo $acao; ?></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>