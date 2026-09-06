<?php
	// criar conexao
	include_once("../../_conexao.php");
	$conexao= conectaBD();

	$var_cracha = (int) $_POST["input_cracha"];
	$var_nome = $_POST["input_nome"];
	$var_comissao = $_POST["input_comissao"];

	$SQL = "UPDATE VENDEDOR SET 
			NOME = '$var_nome',
			COMISSAO = $var_comissao
		WHERE CRACHA = $var_cracha;
	";

	mysqli_query($conexao, $SQL) or die(mysqli_error());

	// encerrar conexão
	mysqli_close($conexao);

	header("Location: ../vendedorSelect.php");
	exit;
?>