<?php
   // criar conexao
   include_once("../_conexao.php");
   $conexao = conectaBD();

   $sql = "SELECT * FROM PRODUTO;";
   $resultado = mysqli_query($conexao, $sql);

   $produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

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
   
   <b><font color="#0000FF">Lista de PRODUTOS</font></b>
   </br> </br>

   <table border = "1">
      <tr>
         <th>Id</th>
         <th>Descrição</th>
         <th>Preço</th>
         <th>Alterar</th>
         <th>Excluir</th>
      </tr>

      <?php foreach($produtos as $produto) {?>
         <tr>
            <td><?= $produto['id'] ?></td>
            <td><?= $produto['descricao'] ?></td>
            <td><?= $produto['preco'] ?></td>
            <td>
               <form action="produtoEditar.php" method="POST">
                  <input type="hidden" name="var_id" value="<?= $produto['id'] ?>">
                  <button type="submit">Alterar</button>
               </form>
            </td>
            <td>
               <form action="./actions/produtoDelete.php" method="post">
                  <input type="hidden" name="var_id" value="<?= $produto['id'] ?>">
                  <button type="submit">Excluir</button>
               </form>
            </td>
         </tr>
      <?php }; ?>

   </table>
   <h4><a href="./produtoInsert.html">Cadastrar novo PRODUTO</a></h4>

</body>
</html>