<?php

    // parâmetros = servidor, usuário, senha, banco de dados
    $conn = new mysqli('localhost', 'root', '', 'treinaweb');

    $sql = "SELECT * FROM alunos";
    $result = $conn->query($sql);
    
    // Obtém a próxima linha de um resultado como um array enumerado
    while($linha = $result->fetch_row()){
        var_dump($linha);
    }

    
?>