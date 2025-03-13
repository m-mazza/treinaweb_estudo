<?php

    // parâmetros = servidor, usuário, senha, banco de dados
    $conn = new mysqli('localhost', 'root', '', 'treinaweb');

    $id = '2 or 1=1';

    $sql = "SELECT * FROM alunos WHERE id = {$id}";
    $result = $conn->query($sql);
    
    // Obtém a próxima linha de um resultado como um array enumerado
    $linhas = $result->fetch_all(MYSQLI_ASSOC);
    
    foreach ($linhas as $linha) {
        echo $linha['id'].' - '.$linha['nome'].'<br>';
    }

    //var_dump($linhas);
    
?>