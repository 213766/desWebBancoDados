<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Lista de PRODUTOS</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>ID</b></td>
        <td><b>Data</b></td>
        <td><b>Local</b></td>
        <td><b>ID Músicos/Banda</b></td>
        <td><b>Nome Músicos/Banda</b></td>
     </tr>

       <?php
            // criar conexao
            include_once("_conexao.php");
            $conexao = conectaBD();

            $sql = "SELECT 
                  s.idshow
                  ,s.data
                  ,s.local
                  ,s.idmusico
                  ,m.nome
               FROM shows s 
               INNER JOIN musicos m on m.idmusico = s.idmusico 
            ;";
            $resultado = mysqli_query($conexao, $sql);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['idshow'];?></td>
                <td><?php echo $i['data'];?></td>
                <td><?php echo $i['local'];?></td>
                <td><?php echo $i['idmusico'];?></td>
                <td><?php echo $i['nome'];?></td>
             </tr>
            <?php
           }
            ?>
     </table>

     <?php
      mysqli_close($conexao);
     ?>
</BODY>
</HTML>
