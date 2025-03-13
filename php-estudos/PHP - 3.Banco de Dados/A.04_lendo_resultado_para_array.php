<?php

    // parâmetros = servidor, usuário, senha, banco de dados
    $conn = new mysqli('localhost', 'root', '', 'treinaweb');

    // mysqli orientado à objetos
    $sql = "SELECT * FROM alunos";
    $result = $conn->query($sql);
    
    //Recebe todas as linhas de resultado como array associativo, numérico, ou ambos
    //padrão é MYSQLI NUM, MYSQLI_ASSOC traz o retorno associativo e MYSQLI_BOTH traz tanto indice numérico como associativo
    $linhas = $result->fetch_all(MYSQLI_ASSOC);
    
    foreach ($linhas as $linha) {
        echo $linha['id'].' - '.$linha['nome'].'<br>';
    }

    var_dump($linhas);

    // abaixo é o estilo procedural

    // $sql = "SELECT * FROM alunos";
    // $result = mysqli_query($conn, $sql);
    // $linhas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // foreach ($linhas as $linha) {
    //     echo $linha['id'].' - '.$linha['nome'].'<br>';
    // }
    // var_dump($linhas);
?>