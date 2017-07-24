<?php
echo "<br/>inicio administracao_acão";

require('administracao_manutencao.php');

$oquefazer = new administracao_manutencao();

$acao = $_REQUEST['acao'];

echo " <br>ação do administracao_acao = $acao";

if($acao == 'listar')
{
	$oquefazer->listar_administracao();
	require('administracao_lista.php');
}

if($acao == 'excluir')
{
	$oquefazer->excluir();
	$oquefazer->listar_administracao();
	require('administracao_lista.php');
}

if($acao == 'inserir')
{
	require('administracao_form.php');
}

if($acao == 'gravar_inserir')
{
	$oquefazer->gravar_inserir();
	$oquefazer->listar_administracao();
	require('administracao_lista.php');
}

if($acao == 'alterar')
{
	$oquefazer->alterar();
	require('administracao_form.php');
}

if($acao == 'gravar_alterar')
	 {
		$oquefazer->gravar_alterar();
		$oquefazer->listar_administracao();
		require('administracao_lista.php');
	 }
echo "<br/>fim administracao_acão";
?>