<?php

    // parâmetros = servidor, usuário, senha, banco de dados
    $conn = new mysqli('localhost', 'root', '', 'treinaweb');

    //$sql = 'CREATE TABLE alunos (id int PRIMARY KEY, nome varchar(100))';
    //$sql = "INSERT INTO alunos(id, nome) VALUES (1, 'Anakin Skywalker')"; 

    $sql = "SELECT * FROM alunos";

    var_dump($conn->query($sql));

?>