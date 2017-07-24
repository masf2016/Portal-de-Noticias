  <?php
  echo "<br/>inicio administracao_manutencao";
  
  class administracao_manutencao
  {
	  var $resultado;
	  var $registros;
	  
	  function administracao_manutencao() 
	  {
		 
	     $this->con = new conexao();
	      
	  }
	  
	   function listar_administracao() 
	  {
		  echo "<br/> listando...".
		  
		$ordenacao = $_REQUEST['ordem'];
		
		if($ordenacao == '')
		$ordenacao =  "nome_usuario"; # faz uma listagem inicial baseada no que foi passado pela url
		
		
		$filtro = $_REQUEST['pesquisa'];
		if($filtro == '')
		
		$filtro_por = '';
		
		else
		
		$filtro_por = $filtro;
				
		 
	    //$sql = "select * from administracaos";
	   
	  $sql = "select * from administracao where nome_usuario like '".$filtro_por."%' order by ".$ordenacao." ;";
	
		$this->resultado = $this->con->banco->Execute($sql);
		
		
		
	  }
	  
	    function excluir() 
	  {
		  
		  
		  
	  $sql = "delete from administracao where cod_usuario = ".$_REQUEST['codigo']." ;"; 
	  
	
		if($this->resultado = $this->con->banco->Execute($sql))
		{
		alerta("O registro foi excluído com sucesso!");
		return true;
			
		}
		else
		{
			
		alerta("Não foi possível excluir o registro");
		return false;	
		}
		
		
		
	  
	  }
	  
	    function gravar_inserir() 
	  {
	    $sql = "insert into administracao (nome_usuario, login_usuario,senha_usuario,nivel_acesso) Values ('".$_REQUEST['nome_usuario']."','".$_REQUEST['login_usuario']."','".$_REQUEST['senha_usuario']."','".$_REQUEST['nivel_acesso']."');";
	
		if ($this->resultado = $this->con->banco->Execute($sql))
		
			{
		alerta("O registro foi inserido com sucesso!");
		return true;
			
		}
		else
		{
			
		alerta("Não foi possível inserir o registro");
		return false;	
		}
		
		
	  
	  }
	  
	  function alterar()
	  {
		  
		$sql = "select * from administracao where cod_usuario = ".$_REQUEST['codigo'];
	
		$this->resultado = $this->con->banco->Execute($sql);
		
		$this->registros = $this->resultado->FetchNextObject(); //se posiciona no registro
		
		  }
		  
		    function gravar_alterar()
	   {
		   	$sql = "update administracao  set nome_usuario = '".$_REQUEST['nome_usuario']."', login_usuario = '".$_REQUEST['login_usuario']."', senha_usuario = '".$_REQUEST['senha_usuario']."', nivel_acesso = '".$_REQUEST['nivel_acesso']."' where cod_usuario = ".$_REQUEST['codigo'].";";
			
        	if($this->resultado = $this->con->banco->Execute($sql))
				{
		alerta("O registro foi alterado com sucesso!");
		return true;
			
		}
		else
		{
			
		alerta("Não foi possível alterar o registro");
		return false;	
		}
	   }
  }
  
  echo "<br/>fim administracao_manutencao";
?>