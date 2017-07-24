  <?php
  echo "<br/>inicio noticia_manutencao";
  
  class noticia_manutencao
  {
	  var $resultado;
	  var $registros;
	  
	  function noticia_manutencao() 
	  {
		 
	     $this->con = new conexao();
	      
	  }
	  
	   function listar_noticia() 
	  {
		  
		  
		$ordenacao = $_REQUEST['ordem'];
		
		if($ordenacao == '')
		$ordenacao =  "titulo_noticia"; # faz uma listagem inicial baseada no que foi passado pela url
		
		
		$filtro = $_REQUEST['pesquisa'];
		
		if($filtro == '')
		
		$filtro_por = '';
		
		else
		
		$filtro_por = $filtro;
				
		 
	    //$sql = "select * from noticias";
	   
	  $sql = "select * from noticias where titulo_noticia like '".$filtro_por."%' order by ".$ordenacao." ;";
	
		$this->resultado = $this->con->banco->Execute($sql);
		
		
		
	  }
	  
	    function excluir() 
	  {
		  
		  
		  
	  $sql = "delete from noticias where cod_noticia = ".$_REQUEST['codigo']." ;"; 
	  //recebe o codigo associado ao link 'excluir' de manutençcão_noticia
	
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
	    $sql = "insert into noticias (nome_autor, data_noticia,titulo_noticia,subtitulo_noticia,categoria,texto_noticia) Values ('".$_REQUEST['nome_autor']."','".$_REQUEST['data_noticia']."','".$_REQUEST['titulo_noticia']."','".$_REQUEST['subtitulo_noticia']."','".$_REQUEST['categoria']."','".$_REQUEST['texto_noticia']."');";
	
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
		  
		$sql = "select * from noticias where cod_noticia = ".$_REQUEST['codigo'];
	
		$this->resultado = $this->con->banco->Execute($sql);
		
		$this->registros = $this->resultado->FetchNextObject(); //se posiciona no registro
		
		  }
		  
		    function gravar_alterar()
	   {
		   	$sql = "update noticias  set nome_autor = '".$_REQUEST['nome_autor']."', data_noticia = '".$_REQUEST['data_noticia']."', titulo_noticia = '".$_REQUEST['titulo_noticia']."', subtitulo_noticia = '".$_REQUEST['subtitulo_noticia']."', categoria = '".$_REQUEST['categoria']."', texto_noticia = '".$_REQUEST['texto_noticia']."' where cod_noticia = ".$_REQUEST['codigo'].";";
			
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
  
  echo "<br/>fim noticia_manutencao";
?>