<!-- banco cria dentro do xammp, é o sgbd -->
<!-- http://localhost/phpmyadmin/ -->

<?php
    
    // host, user, senha, nomeBD
    $conn = mysqli_connect('localhost', 'root', 'senhaRoot', 'bancoAula8');

    if(mysqli_connect_errno()) {
        exit("Database connection failed: (" . mysqli_connect_errno() . ")");
    };

    // query q sera usada
    $sql = 'select * from produto';

    // rodando o select e armazenando resultado
    $resultado = mysqli_query($conn, $sql);

    // exibindo o resultado no browser
    foreach($resultado as $lin) {
        echo "{$lin['codigo']};{$lin['nome']};{$lin['valor']};{$lin['perecivel']}<br>";
    };

    mysqli_free_result($resultado); // limpa a variavel
    mysqli_close($conn); // fecha a conexao

?>