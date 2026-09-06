<?php
	// criar conexao
	include_once("../../_conexao.php");
	$conexao= conectaBD();

	$var_id = (int) $_POST["input_id"];
	$var_descricao = $_POST["input_descricao"];
	$var_preco = $_POST["input_preco"];

	$SQL = "UPDATE produto SET 
			descricao = '$var_descricao',
			preco = $var_preco
		WHERE id = $var_id;
	";

	mysqli_query($conexao, $SQL) or die(mysqli_error());

	// encerrar conexão
	mysqli_close($conexao);

	header("Location: ../produtoSelect.php");
	exit;
?>