<?php
    include_once("../_conexao.php");
    $conexao = conectaBD();

    $sql = "SELECT 
            * 
        FROM VENDA V
        INNER JOIN VENDEDOR VE
            ON V.crachaVendedor = VE.cracha
    ";
    $resultado = mysqli_query($conexao,$sql);

    $vendas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

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

   <a href="../index.html">Voltar ao Início</a>
   </br> </br>
   
   <b><font color="#0000FF">Lista de VENDAS</font></b>
   </br> </br>

   <table border = "1">
      <tr>
         <th>Id Venda</th>
         <th>Cracha Vendedor</th>
         <th>Nome Vendedor</th>
         <th>Data</th>
         <th>Visualizar Detalhes</th>
      </tr>

      <?php foreach($vendas as $venda) {?>
         <tr>
            <td><?= $venda['idVenda']?></td>
            <td><?= $venda['crachaVendedor'] ?></td>
            <td><?= $venda['nome'] ?></td>
            <td><?= $venda['dt'] ?></td>
            <td>
               <form action="./produtoVendaSelect.php" method="post">
                  <input type="hidden" name="var_idVenda" value="<?= $venda['idVenda'] ?>">
                  <button type="submit">Detalhes</button>
               </form>
            </td>
         </tr>
      <?php }; ?>

   </table>
   <h4><a href="./vendaInsert.html">Registar Venda</a></h4>

</body>
</html>