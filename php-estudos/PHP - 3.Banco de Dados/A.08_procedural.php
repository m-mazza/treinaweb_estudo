<?php

    $conn = mysqli_connect('127.0.0.1', 'root', '', 'treinaweb');

    $query = "SELECT * FROM alunos";
    $result = mysqli_query($conn, $query);

    var_dump(mysqli_fetch_all($result, MYSQLI_ASSOC))
?>