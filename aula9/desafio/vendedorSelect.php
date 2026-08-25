<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Lista de PRODUTOS</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>Código</b></td>
        <td><b>Nome</b></td>
        <td><b>Comissao</b></td>
     </tr>

    <?php
        
        // nao da erro sozinho ao errrar a conxao
        mysqli_report(MYSQLI_REPORT_OFF); 

        $server = 'localhost';
        $bd = 'bancoAula8';
        $user = 'root'; 
        $senha = 'senhaRoot';

        $conn = mysqli_connect($server,$user,$senha,$bd);
        if(!$conn){
            die('Conexão Falhou! '.mysqli_connect_error());
        };

        $query = "select * from vendedor;";
        $relatorio = mysqli_query($conn,$query);

        // exibir
        while($i = mysqli_fetch_assoc($relatorio)){

            ?> <!-- encerra o php dentro do loop -->
            
            <tr>
                <td><?php echo $i['codigo'];?></td> <!-- o php é aberto novamente e encerrado em cada linha -->
                <td><?php echo $i['nome'];?></td>
                <td><?php echo $i['comissao'];?></td>
            </tr>

            <?php // inicia o php dnv pra fechar o loop
        }

    ?>

</BODY>
</HTML>