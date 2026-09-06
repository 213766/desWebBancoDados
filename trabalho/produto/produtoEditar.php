<?php
   $id = filter_input(INPUT_POST, "var_id");;

   include_once("../_conexao.php");
   $conexao = conectaBD();

   $sql = "SELECT * FROM PRODUTO WHERE ID = {$id}";
   $resultado = mysqli_query($conexao, $sql);

   $lin = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

   <b><font color="#0000FF">Tela de Edição de PRODUTOS</font></b>
   </br> </br>

   <form action="./actions/produtoUpdate.php" method="post">

      <input type=hidden name=tabela value="produto">

      <b>Id:</b> <input type="text" name="input_id" size="8" value="<?= $lin['id']; ?>" readonly> </br></br>
      <b>Descrição:</b> <input type="text" name="input_descricao" size="30" value="<?= $lin['descricao']; ?>"> </br></br>
      <b>Preço:</b> <input type="text" name="input_preco" size="15" value="<?= $lin['preco']; ?>"> </br></br>
      
      <input type="submit" value="Salvar">
   </form>

</body>
</html>