<?php

    $idVenda = filter_input(INPUT_POST, "var_idVenda");

    include_once('../_conexao.php');
    $conexao = conectaBD();

    $sql = "SELECT
            *
        FROM VENDA V
        INNER JOIN VENDEDOR VE
            ON V.crachaVendedor = VE.cracha
        WHERE V.idVenda = $idVenda;
    ";
    $resultado = mysqli_query($conexao,$sql);
    $venda = mysqli_fetch_assoc($resultado);

    $sql = "SELECT
            *
            ,PV.quantidade * P.preco as valorVenda
            ,SUM(PV.quantidade * P.preco) OVER (PARTITION BY PV.idVenda) valorVendaTotal
            ,SUM(PV.quantidade) OVER (PARTITION BY PV.idVenda) quantidadeTotal
        FROM PRODUTO_VENDA PV 
        INNER JOIN PRODUTO P
            ON P.id = PV.id
        WHERE PV.idVenda = $idVenda;
    ";
    $resultado = mysqli_query($conexao,$sql);
    $detalhes = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<style>
   button {
      background: transparent;
      border: none;
      padding: 0;
      color: blue;
      text-decoration: underline;
      cursor: pointer;
   }
</style>
<body>

	<a href="./vendaSelect.php">Voltar as VENDAS</a>
	</br> </br>

	<b><font color="#0000FF">Detalhes da Venda <?= $idVenda ?></font></b>
	</br> </br>

	<?= "Detalhes da Venda ".$venda['idVenda'].", realizada dia ".$venda['dt']." por ".$venda['nome']." (cracha ".$venda['cracha'].").<br><br>" ?>

	<table border = "1">
		<tr>
			<th>Id Produto</th>
			<th>Descrição</th>
			<th>Preço</th>
			<th>Quantidade</th>
			<th>Total Venda</th>
		</tr>

		<?php foreach($detalhes as $detalhe) { ?>
			<tr>
				<td><?= $detalhe['id']?></td>
				<td><?= $detalhe['descricao'] ?></td>
				<td><?= $detalhe['preco'] ?></td>
				<td><?= $detalhe['quantidade'] ?></td>
				<td><?= $detalhe['valorVenda'] ?></td>
			</tr>
		<?php }; ?>

		<tr>
            <td></td>
            <td></td>
            <td></td>
            <td><?= $detalhe['quantidadeTotal'] ?></td>
            <td><?= $detalhe['valorVendaTotal'] ?></td>
        </tr>

	</table>

</body>
</html>