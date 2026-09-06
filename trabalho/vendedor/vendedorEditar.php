<?php
   $cracha = filter_input(INPUT_POST, "var_cracha");

   include_once("../_conexao.php");
   $conexao = conectaBD();

   $sql = "SELECT * FROM VENDEDOR WHERE CRACHA = {$cracha}";
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

   <b><font color="#0000FF">Tela de Edição de VENDEDORES</font></b>
   </br> </br>

   <form action="./actions/vendedorUpdate.php" method="post">

      <input type=hidden name=tabela value="vendedor">

      <b>cracha:</b> <input type="text" name="input_cracha" size="8" value="<?= $lin['cracha']; ?>" readonly> </br></br>
      <b>Nome:</b> <input type="text" name="input_nome" size="30" value="<?= $lin['nome']; ?>"> </br></br>
      <b>Comissão:</b> <input type="text" name="input_comissao" size="15" value="<?= $lin['comissao']; ?>"> </br></br>
      
      <input type="submit" value="Salvar">
   </form>

</body>
</html>