<?php
   // criar conexao
   include_once("../_conexao.php");
   $conexao = conectaBD();

   $sql = "SELECT * FROM VENDEDOR;";
   $resultado = mysqli_query($conexao, $sql);

   $vendedores = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

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
   
   <b><font color="#0000FF">Lista de VENDEDORES</font></b>
   </br> </br>

   <table border = "1">
      <tr>
         <th>Cracha</th>
         <th>Nome</th>
         <th>Comissão</th>
         <th>Alterar</th>
         <th>Excluir</th>
      </tr>

      <?php foreach($vendedores as $vendedor) {?>
         <tr>
            <td><?= $vendedor['cracha'] ?></td>
            <td><?= $vendedor['nome'] ?></td>
            <td><?= $vendedor['comissao'] ?></td>
            <td>
               <form action="./vendedorEditar.php" method="POST">
                  <input type="hidden" name="var_cracha" value="<?= $vendedor['cracha'] ?>">
                  <button type="submit">Alterar</button>
               </form>
            </td>
            <td>
               <form action="./actions/vendedorDelete.php" method="post">
                  <input type="hidden" name="var_cracha" value="<?= $vendedor['cracha'] ?>">
                  <button type="submit">Excluir</button>
               </form>
            </td>
         </tr>
      <?php }; ?>

   </table>
   <h4><a href="./vendedorInsert.html">Cadastrar novo vendedor</a></h4>

</body>
</html>