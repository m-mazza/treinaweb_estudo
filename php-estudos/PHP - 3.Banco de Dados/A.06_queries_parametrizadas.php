<?php

    $id1 = 1;
    $id2 = 2;

    $conn = new mysqli('localhost', 'root', '', 'treinaweb');
    $stmt = $conn->stmt_init();

    $stmt->prepare('SELECT * FROM alunos WHERE id = ? or id = ?');
    $stmt->bind_param('ii', $id1, $id2);

    $stmt->execute();
    $stmt->bind_result($idAluno, $nomeAluno);
    

    while($stmt->fetch()){
        echo $idAluno.'--'.$nomeAluno.'<br>';
    }

    
?>