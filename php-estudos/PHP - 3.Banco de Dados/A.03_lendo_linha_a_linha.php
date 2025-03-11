<?php

    // parâmetros = servidor, usuário, senha, banco de dados
    $conn = new mysqli('localhost', 'root', '', 'treinaweb');

    $sql = "SELECT * FROM alunos";
    $result = $conn->query($sql);
    
    
    while($linha = $result->fetch_row()){
        var_dump($linha);
    }
?>