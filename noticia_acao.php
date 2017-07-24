<?php


require('noticia_manutencao.php');

$oquefazer = new noticia_manutencao();

$acao = $_REQUEST['acao'];

echo " <br>ação do noticia_acao = $acao";

if($acao == 'listar')
{
	$oquefazer->listar_noticia();
	require('noticia_lista.php');
}

if($acao == 'excluir')
{
	$oquefazer->excluir();
	$oquefazer->listar_noticia();
	require('noticia_lista.php');
}

if($acao == 'inserir')
{
	require('noticia_form.php');
}

if($acao == 'gravar_inserir')
{
	$oquefazer->gravar_inserir();
	$oquefazer->listar_noticia();
	require('noticia_lista.php');
}

if($acao == 'alterar')
{
	$oquefazer->alterar();
	require('noticia_form.php');
}

if($acao == 'gravar_alterar')
	 {
		$oquefazer->gravar_alterar();
		$oquefazer->listar_noticia();
		require('noticia_lista.php');
	 }

?>