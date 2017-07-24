<?php

// chamando a biblioteca de conexao ADObd
require('adodb5/adodb.inc.php');

#criando a  classe de conexao com o banco de dados 
class conexao
{
	var $tipo_banco = "mysql";
	var $servidor = "localhost";
	var $usuario =  "root";
	var $senha = "123";
	var $banco;
	
	//construtor da classe conxao
	function conexao()
	{
				$this->banco = NewADOConnection($this->tipo_banco);
				$this->banco->dialect = 3;
				$this->banco->debug = true;
				$this->banco->Connect($this->servidor,$this->usuario,$this->senha,"portal_noticias");
	}
	
}
$con = new conexao();	

if($con)
	echo "banco conectado<br/>";
	else
	echo "nao conectou o banco<br/>";

?>